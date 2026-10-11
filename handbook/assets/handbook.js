(() => {
  const data = window.HANDBOOK;
  const details = window.HANDBOOK_DETAIL || {};
  const nav = document.querySelector('#side-nav');
  const article = document.querySelector('#article');
  const search = document.querySelector('#search');
  const crumb = document.querySelector('#crumb-current');
  const modal = document.querySelector('#glossary-modal');
  const toast = document.querySelector('#toast');
  const mobileMenu = document.querySelector('#contents-toggle');
  let activeId = 'welcome';
  let toastTimer;

  const esc = (value) => String(value).replace(/[&<>"']/g, (char) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
  })[char]);
  const termNames = Object.keys(data.glossary).sort((a, b) => b.length - a.length);
  const termPattern = new RegExp(`(?<![\\w-])(${termNames.map((term) => term.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')).join('|')})(?![\\w-])`, 'gi');

  function rich(value) {
    return esc(value).replace(termPattern, (match) => {
      const key = termNames.find((term) => term.toLowerCase() === match.toLowerCase());
      return key ? `<button class="glossary-link" type="button" data-term="${esc(key)}">${match}</button>` : match;
    });
  }
  function plainValue(value) {
    if (typeof value === 'string') return value;
    if (Array.isArray(value)) return value.map(plainValue).join(' ');
    if (value && typeof value === 'object') return Object.values(value).map(plainValue).join(' ');
    return '';
  }
  function allItems() {
    return data.groups.flatMap((group) => group.items.map((item) => ({ ...item, group: group.label })));
  }
  function matchesQuery(item, query) {
    const entry = data.entries[item.id];
    const haystack = `${item.title} ${plainValue(entry)}`.toLocaleLowerCase('id');
    return haystack.includes(query.toLocaleLowerCase('id'));
  }

  function renderNav(query = '') {
    const q = query.trim();
    const groups = data.groups.map((group) => {
      const items = group.items.filter((item) => !q || matchesQuery(item, q));
      if (!items.length) return '';
      return `<section class="nav-group"><h2>${esc(group.label)}</h2>${items.map((item) => {
        const expanded = activeId === item.id && details[item.id];
        const sub = expanded ? `<div class="nav-sublist">${details[item.id].chapters.map(([anchor, title]) => `<button type="button" class="nav-sub-link" data-jump="${esc(anchor)}">${esc(title)}</button>`).join('')}<button type="button" class="nav-sub-link" data-jump="files">File dan folder</button><button type="button" class="nav-sub-link" data-jump="flow">Alur kerja</button><button type="button" class="nav-sub-link" data-jump="wireframe">Wireframe</button><button type="button" class="nav-sub-link" data-jump="walkthroughs">Bedah kode</button><button type="button" class="nav-sub-link" data-jump="memory">Yang perlu diingat</button></div>` : '';
        return `<button class="nav-link ${item.type === 'job' ? 'is-job' : ''}" type="button" data-open="${esc(item.id)}" aria-current="${activeId === item.id ? 'page' : 'false'}"><span class="nav-icon">${item.type === 'job' ? '<i></i>' : item.type === 'intro' ? '✳' : '↗'}</span><span>${esc(item.title)}</span></button>${sub}`;
      }).join('')}</section>`;
    }).join('');
    const terms = q ? termNames.filter((term) => term.toLocaleLowerCase('id').includes(q.toLocaleLowerCase('id')) || data.glossary[term].some((line) => line.toLocaleLowerCase('id').includes(q.toLocaleLowerCase('id')))) : [];
    const glossaryGroup = terms.length ? `<section class="nav-group"><h2>HASIL KAMUS</h2>${terms.map((term) => `<button class="nav-link glossary-result" type="button" data-term="${esc(term)}"><span class="nav-icon">Aa</span><span>${esc(term)}</span></button>`).join('')}</section>` : '';
    nav.innerHTML = groups || glossaryGroup ? groups + glossaryGroup : '<div class="search-empty"><b>Belum ketemu.</b><span>Coba nama jobsheet, konsep, atau nama file yang lain.</span></div>';
  }

  function renderFlow(steps) {
    return `<div class="flow-track" role="list">${steps.map((step, index) => `<div class="flow-step" role="listitem"><span class="flow-number">${String(index + 1).padStart(2, '0')}</span><span>${rich(step)}</span></div>`).join('')}</div>`;
  }

  function wireBlock(block, index) {
    const [type, ...labels] = block;
    if (type === 'split') return `<div class="wire-tiles">${labels.map((label) => `<div class="wire-tile">${rich(label)}</div>`).join('')}</div>`;
    if (type === 'table') {
      const cells = labels.join(' · ').split(/\s*[·|]\s*/).filter(Boolean);
      return `<div class="wire-table"><div class="wire-table-title">Daftar data</div><div class="wire-table-head">${cells.map((cell) => `<span>${rich(cell)}</span>`).join('')}</div><div class="wire-table-row"><span>Contoh record</span><span>Data terpilih</span><span class="wire-action">aksi</span></div><div class="wire-table-row"><span>Record berikutnya</span><span>Data terkait</span><span class="wire-action">aksi</span></div></div>`;
    }
    if (type === 'form') return `<div class="wire-form"><span class="wire-label">${rich(labels[0] || 'Field formulir')}</span><span class="wire-input">${rich(labels.slice(1).join(' · ') || 'Tulis atau pilih nilai…')}</span></div>`;
    if (type === 'search') return `<div class="wire-search"><span>⌕</span>${rich(labels.join(' ') || 'Cari data…')}</div>`;
    if (type === 'button') return `<div class="wire-button">${rich(labels.join(' · '))}</div>`;
    if (type === 'note') return `<div class="wire-note"><span class="wire-note-dot"></span>${rich(labels.join(' · '))}</div>`;
    if (type === 'brand') return `<div class="wire-brand"><span>W</span><b>${rich(labels.join(' · '))}</b><span class="wire-brand-menu">···</span></div>`;
    if (type === 'nav') return `<div class="wire-nav">${rich(labels.join(' · '))}</div>`;
    if (type === 'heading') return `<div class="wire-heading">${rich(labels.join(' · '))}</div>`;
    if (type === 'browser') return `<div class="wire-node wire-browser"><span class="wire-node-icon">⌘</span><b>${rich(labels.join(' · '))}</b></div>`;
    if (type === 'server') return `<div class="wire-node wire-server"><span class="wire-node-icon">⌘</span><b>${rich(labels.join(' · '))}</b></div>`;
    if (type === 'database') return `<div class="wire-node wire-database"><span class="wire-node-icon">▤</span><b>${rich(labels.join(' · '))}</b></div>`;
    if (type === 'session') return `<div class="wire-node wire-session"><span class="wire-node-icon">◈</span><b>${rich(labels.join(' · '))}</b></div>`;
    if (type === 'request' || type === 'return') return `<div class="wire-node wire-${type}"><b>${rich(labels.join(' · '))}</b></div>`;
    if (type === 'group') return `<div class="wire-group"><span>${rich(labels.join(' · '))}</span></div>`;
    return `<div class="wire-note wire-generic" data-order="${index}">${rich(labels.join(' · '))}</div>`;
  }

  function renderWireframe(wireframe) {
    if (!wireframe) return '';
    return `<section class="lesson-section" id="wireframe"><div class="section-heading"><span class="section-index">04</span><div><span class="section-kicker">LIHAT SUSUNANNYA</span><h2>Wireframe &amp; alur visual</h2></div></div><figure class="wireframe-card"><div class="wireframe-top"><div class="wire-lights"><i></i><i></i><i></i></div><span>${esc(wireframe.source)}</span></div><div class="wireframe-canvas">${wireframe.blocks.map(wireBlock).join('')}</div><figcaption>${rich(wireframe.caption)}</figcaption></figure></section>`;
  }

  function renderCode(code) {
    if (!code) return '';
    return `<section class="lesson-section" id="code"><div class="section-heading"><span class="section-index">05</span><div><span class="section-kicker">BUKA SOURCE BERSAMA</span><h2>Kupas potongan kode</h2></div></div><div class="code-card"><div class="code-head"><div><span class="code-caption">${esc(code.label)}</span><button class="file-copy" type="button" data-copy="${esc(code.file)}" title="Salin alamat berkas">${esc(code.file)} <span>▣ salin path</span></button></div><button class="copy-code" type="button" data-copy-code aria-label="Salin potongan kode">Salin kode</button></div><pre><code>${esc(code.snippet)}</code></pre></div><ol class="explain-list">${code.explain.map((line, index) => `<li><span>${index + 1}</span><p>${rich(line)}</p></li>`).join('')}</ol></section>`;
  }

  function renderDetails(id) {
    const detail = details[id];
    if (!detail) return '';
    const lessons = detail.lessons.map((lesson) => `<section class="detail-chapter" id="${esc(lesson.id)}"><span class="chapter-kicker">BAGIAN ${esc(lesson.id.toUpperCase())}</span><h2>${rich(lesson.title)}</h2><p>${rich(lesson.text)}</p><ul class="detail-points">${lesson.points.map((point) => `<li>${rich(point)}</li>`).join('')}</ul></section>`).join('');
    const walkthroughs = (detail.walkthroughs || []).map((code, index) => `<div class="walkthrough-card" id="code-${index + 1}"><div class="code-head"><div><span class="code-caption">${esc(code.label)}</span><button class="file-copy" type="button" data-copy="${esc(code.file)}">${esc(code.file)} <span>▣ salin path</span></button></div><button class="copy-code" type="button" data-copy-code>Salin kode</button></div><pre><code>${esc(code.snippet)}</code></pre><ol class="explain-list">${code.steps.map((step, i) => `<li><span>${i + 1}</span><p>${rich(step)}</p></li>`).join('')}</ol></div>`).join('');
    return `<section class="lesson-section" id="concepts"><div class="section-heading"><span class="section-index">01</span><div><span class="section-kicker">PECAH JADI BAGIAN KECIL</span><h2>Materi yang dipelajari</h2></div></div>${lessons}</section>`;
  }

  function renderWalkthroughs(id) {
    const items = details[id]?.walkthroughs || [];
    if (!items.length) return '';
    return `<section class="lesson-section" id="walkthroughs"><div class="section-heading"><span class="section-index">05</span><div><span class="section-kicker">TELUSURI IMPLEMENTASINYA</span><h2>Bedah file dan potongan kode</h2></div></div><p class="section-intro">Setiap contoh menunjukkan peran file dan cara membaca urutan instruksinya. Salin path untuk mencari file yang sama di proyek.</p>${items.map((item, index) => `<div class="walkthrough-card" id="code-${index + 1}"><div class="code-head"><div><span class="code-caption">${esc(item.label)}</span><button class="file-copy" type="button" data-copy="${esc(item.file)}">${esc(item.file)} <span>▣ salin path</span></button></div><button class="copy-code" type="button" data-copy-code>Salin kode</button></div><pre><code>${esc(item.snippet)}</code></pre><ol class="explain-list">${item.steps.map((step, i) => `<li><span>${i + 1}</span><p>${rich(step)}</p></li>`).join('')}</ol></div>`).join('')}</section>`;
  }

  function renderEntry(id) {
    const entry = data.entries[id];
    if (!entry) return renderEntry('welcome');
    activeId = id;
    crumb.textContent = entry.title;
    renderNav(search.value);
    if (entry.kind === 'intro') {
      article.innerHTML = `<header class="article-header intro-header"><span class="article-tag"><i></i>${esc(entry.tag)}</span><h1>${rich(entry.title)}</h1><p class="article-lead">${rich(entry.lead)}</p><div class="intro-meta"><span>13 jobsheet</span><b>·</b><span>1 variasi Bootstrap</span><b>·</b><span>7 panduan umum</span></div></header><section class="welcome-feature"><div class="welcome-copy"><span class="section-kicker">MULAI DARI MANA SAJA</span><h2>Bangun pemahaman dari file yang benar-benar ada.</h2>${entry.paragraphs.map((p) => `<p>${rich(p)}</p>`).join('')}</div><div class="welcome-aside"><span class="aside-icon">✳</span><h3>${rich(entry.callout.title)}</h3><p>${rich(entry.callout.text)}</p></div></section><section class="lesson-section"><div class="section-heading"><span class="section-index">01</span><div><span class="section-kicker">URUTAN YANG ENAK DIIKUTI</span><h2>Empat langkah memakai handbook</h2></div></div><ol class="start-steps">${entry.steps.map((step, i) => `<li><span>${String(i + 1).padStart(2, '0')}</span><p>${rich(step)}</p></li>`).join('')}</ol></section><section class="lesson-section"><div class="section-heading"><span class="section-index">02</span><div><span class="section-kicker">JELAJAHI ISI</span><h2>Pilih jalur belajar</h2></div></div><div class="route-cards">${data.groups.slice(1).map((group) => `<div class="route-card"><span>${esc(group.label)}</span><b>${group.items.length} bagian</b><div>${group.items.slice(0, 4).map((item) => `<button type="button" data-open="${esc(item.id)}">${esc(item.title)}</button>`).join('')}${group.items.length > 4 ? `<button type="button" data-open="${esc(group.items[4].id)}">Lihat lainnya →</button>` : ''}</div></div>`).join('')}</div></section><section class="lesson-section"><div class="callout"><b>Catatan tentang diagram</b><p>Jobsheet 4–6 memiliki dokumen wireframe asli. Diagram pada Jobsheet lainnya dibuat sebagai ilustrasi berdasarkan halaman dan kode implementasinya.</p></div></section>`;
    } else {
      const jobNumber = entry.kind === 'job' ? `<span class="number-pill">${esc(entry.tag.split('·')[0].trim())}</span>` : '';
      const numbering = entry.kind === 'job' ? '01' : '01';
      const detail = details[id];
      const takeaways = detail?.memory?.length ? `<section class="lesson-section" id="memory"><div class="callout memory-card"><b>Yang perlu diingat</b><ul>${detail.memory.map((line) => `<li>${rich(line)}</li>`).join('')}</ul></div></section>` : '';
      article.innerHTML = `<header class="article-header"><span class="article-tag"><i></i>${esc(entry.tag)}</span><h1>${rich(entry.title)}</h1><p class="article-lead">${rich(entry.lead)}</p><div class="article-meta">${jobNumber}<span>${entry.kind === 'job' ? 'Materi jobsheet' : 'Panduan konsep umum'}</span><span class="meta-divider">·</span><span>${entry.files?.length || 0} file dibahas</span></div></header><div class="article-body"><section class="lesson-section" id="overview"><div class="section-heading"><span class="section-index">${numbering}</span><div><span class="section-kicker">KONSEP &amp; TUJUAN</span><h2>Apa yang sedang kita pelajari?</h2></div></div>${entry.paragraphs.map((p) => `<p class="body-copy">${rich(p)}</p>`).join('')}</section>${renderDetails(id)}${entry.callout ? `<section class="lesson-section"><div class="callout"><b>${rich(entry.callout.title)}</b><p>${rich(entry.callout.text)}</p></div></section>` : ''}<section class="lesson-section" id="files"><div class="section-heading"><span class="section-index">02</span><div><span class="section-kicker">KENALI BERKASNYA</span><h2>File dan folder yang berperan</h2></div></div><p class="section-intro">Klik path untuk menyalinnya, lalu buka path yang sama pada source proyek.</p><div class="file-list">${entry.files.map(([path, role], i) => `<div class="file-row"><span class="file-number">${String(i + 1).padStart(2, '0')}</span><button class="file-copy" type="button" data-copy="${esc(path)}" aria-label="Salin path ${esc(path)}">${esc(path)} <span>▣ salin</span></button><p>${rich(role)}</p></div>`).join('')}</div></section><section class="lesson-section" id="flow"><div class="section-heading"><span class="section-index">03</span><div><span class="section-kicker">IKUTI URUTANNYA</span><h2>Alur kerja</h2></div></div><p class="section-intro">Urutan ini membantu melihat tugas setiap halaman, script, atau handler dalam satu kesatuan.</p>${renderFlow(entry.flow)}</section>${renderWireframe(entry.wireframe)}${renderWalkthroughs(id)}${takeaways}<section class="lesson-section"><div class="next-card"><span class="next-arrow">→</span><div><span class="section-kicker">SETELAH INI</span><p>${rich(entry.next)}</p></div>${entry.kind === 'job' ? '<button type="button" data-next>Jobsheet berikutnya <span>→</span></button>' : ''}</div></section></div>`;
    }
    if (location.hash !== `#${id}`) history.replaceState(null, '', `#${id}`);
    document.querySelector('.sidebar').classList.remove('is-open');
    mobileMenu.setAttribute('aria-expanded', 'false');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function openTerm(term) {
    const definition = data.glossary[term];
    if (!definition) return;
    document.querySelector('#glossary-title').textContent = term;
    document.querySelector('#glossary-definition').textContent = definition[0];
    document.querySelector('#glossary-analogy').textContent = definition[1];
    document.querySelector('#glossary-example').textContent = definition[2];
    modal.hidden = false;
    modal.querySelector('.modal-close').focus();
  }
  function closeModal() { modal.hidden = true; }
  function notify(text) {
    toast.textContent = text;
    toast.classList.add('is-visible');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('is-visible'), 1800);
  }
  async function copyText(text) {
    try {
      await navigator.clipboard.writeText(text);
      notify('Tersalin: ' + text);
    } catch {
      const field = document.createElement('textarea');
      field.value = text;
      field.setAttribute('readonly', '');
      field.style.position = 'fixed';
      field.style.opacity = '0';
      document.body.appendChild(field);
      field.select();
      const copied = document.execCommand('copy');
      field.remove();
      notify(copied ? 'Tersalin: ' + text : 'Salin manual: ' + text);
    }
  }

  nav.addEventListener('click', (event) => {
    const open = event.target.closest('[data-open]');
    const term = event.target.closest('[data-term]');
    const jump = event.target.closest('[data-jump]');
    if (open) renderEntry(open.dataset.open);
    else if (term) openTerm(term.dataset.term);
    else if (jump) document.getElementById(jump.dataset.jump)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
  article.addEventListener('click', (event) => {
    const open = event.target.closest('[data-open]');
    const term = event.target.closest('[data-term]');
    const copy = event.target.closest('[data-copy]');
    const copyCode = event.target.closest('[data-copy-code]');
    const next = event.target.closest('[data-next]');
    if (open) renderEntry(open.dataset.open);
    else if (term) openTerm(term.dataset.term);
    else if (copy) copyText(copy.dataset.copy);
    else if (copyCode) copyText(copyCode.closest('.code-card, .walkthrough-card')?.querySelector('pre code')?.textContent || '');
    else if (next) {
      const jobs = allItems().filter((item) => item.type === 'job');
      const current = jobs.findIndex((item) => item.id === activeId);
      if (current > -1 && jobs[current + 1]) renderEntry(jobs[current + 1].id);
    }
  });
  search.addEventListener('input', () => renderNav(search.value));
  search.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
      const target = nav.querySelector('[data-open]');
      if (target) renderEntry(target.dataset.open);
      else {
        const term = nav.querySelector('[data-term]');
        if (term) openTerm(term.dataset.term);
      }
    }
    if (event.key === 'Escape') { search.value = ''; renderNav(); search.blur(); }
  });
  mobileMenu.addEventListener('click', () => {
    const open = document.querySelector('.sidebar').classList.toggle('is-open');
    mobileMenu.setAttribute('aria-expanded', String(open));
  });
  document.addEventListener('click', (event) => {
    const sidebar = document.querySelector('.sidebar');
    if (window.innerWidth <= 680 && sidebar.classList.contains('is-open') && !sidebar.contains(event.target) && !mobileMenu.contains(event.target)) {
      sidebar.classList.remove('is-open');
      mobileMenu.setAttribute('aria-expanded', 'false');
    }
  });
  document.addEventListener('keydown', (event) => {
    if (event.key === '/' && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) { event.preventDefault(); search.focus(); }
    if (event.key === 'Escape' && !modal.hidden) closeModal();
  });
  modal.addEventListener('click', (event) => { if (event.target === modal || event.target.closest('.modal-close')) closeModal(); });

  const initial = decodeURIComponent(location.hash.slice(1));
  renderNav();
  renderEntry(data.entries[initial] ? initial : 'welcome');
})();
