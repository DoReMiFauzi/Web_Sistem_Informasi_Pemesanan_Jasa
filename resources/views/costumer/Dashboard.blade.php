<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Dashboard - SIP Jasa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        display: ['"Plus Jakarta Sans"', 'Inter', 'system-ui', 'sans-serif']
      },
      colors: {
        brand: { 50: '#eff4ff', 100: '#dbe6fe', 500: '#2563eb', 600: '#1d5be0', 700: '#0b4bc9' },
        mitra: { 50: '#e8f7ef', 600: '#0f7a4f', 700: '#0b6a43' },
        ink: { 900: '#0f172a', 600: '#475569', 500: '#64748b', 400: '#94a3b8' }
      }
    }
  }
}
</script>
<style>
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .no-scrollbar { scrollbar-width: none; }
</style>
</head>
<body class="min-h-screen bg-[#f6f8fd] font-sans text-ink-900 antialiased">

<div id="overlay" class="fixed inset-0 z-30 hidden bg-black/40 lg:hidden"></div>

<!-- ============ SIDEBAR ============ -->
<aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex w-[288px] -translate-x-full flex-col border-r border-slate-200 bg-white transition-transform duration-200 lg:translate-x-0" aria-label="Navigasi pelanggan">
  <div class="flex h-20 items-center gap-3 border-b border-slate-200 px-6">
    <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand-500 text-white">
        <img src="{{ asset('assets/icon-sipjasa-solid.svg') }}" alt="Logo SIP Jasa" class="h-10 w-10">
    </span>
    <span class="font-display text-lg font-semibold text-brand-600">SIP JASA</span>
  </div>

  <nav class="flex-1 overflow-y-auto px-4 pt-6 text-[15px]">
    <p class="mb-3 px-2 text-[11px] font-semibold uppercase tracking-[0.1em] text-ink-500">Menu Utama</p>

    <a href="#" aria-current="page" class="flex items-center gap-3 rounded-lg bg-brand-500 px-3 py-2 font-medium text-white">
      <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
      Dashboard
    </a>
    <a href="#" class="mt-1.5 flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-ink-600 hover:bg-slate-50 hover:text-ink-900">
      <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M9 3v2h6V3M8 10h8M8 14h8M8 18h5"/></svg>
      Pesanan Saya
      <span class="ml-auto grid h-5 min-w-5 place-items-center rounded-full bg-red-600 px-1.5 text-[11px] font-bold text-white">2</span>
    </a>
    <a href="#" class="mt-1.5 flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-ink-600 hover:bg-slate-50 hover:text-ink-900">
      <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Profil &amp; Alamat
    </a>
  </nav>

  <div class="border-t border-slate-200 p-4">
    <div class="rounded-xl border border-brand-100 bg-brand-50 p-3">
      <p class="flex items-center gap-1.5 text-xs font-bold text-brand-700">
        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Alamat Utama
      </p>
      <p class="mt-1 text-[13px] leading-snug text-ink-900">Jl. Sukajadi No. 120, Sukajadi, Kota Bandung</p>
      <p class="mt-1 text-[11px] text-ink-600">(Alamat Utama Pengguna)</p>
    </div>
    <form action="{{ route('costumer.logout') }}" method="POST" class="mt-4">
      <button type="submit" class="flex items-center w-full gap-3 rounded-lg px-3 py-2 text-[15px] font-medium text-red-600 hover:bg-red-50">
        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/></svg>
        Keluar Akun
      </button>
    </form>
  </div>
</aside>

<!-- ============ KONTEN ============ -->
<div class="lg:pl-[288px]">

  <!-- Top bar -->
  <header class="sticky top-0 z-20 flex h-20 items-center gap-4 border-b border-slate-200 bg-white px-4 sm:px-8">
    <button type="button" id="menu-open" aria-label="Buka menu" class="grid h-9 w-9 shrink-0 place-items-center rounded-lg border border-slate-200 lg:hidden">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>

    <div class="hidden shrink-0 leading-tight sm:block">
      <p class="font-display text-[15px] font-bold">Halo, {{ $nama }}!</p>
      <p class="mt-0.5 text-[13px] text-ink-600">Mau pesan jasa apa hari ini?</p>
    </div>

    <form role="search" id="search-form" class="relative mx-auto w-full max-w-[520px]">
      <label for="search" class="sr-only">Cari jasa</label>
      <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-ink-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
      <input id="search" type="search" placeholder="Cari jasa rumah tangga (Cuci AC, Kebersihan)..."
             class="h-10 w-full rounded-full border border-slate-200 bg-brand-50 pl-11 pr-4 text-[13px] placeholder:text-ink-500 focus:border-brand-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500/20">
    </form>

    <div class="flex shrink-0 items-center gap-3 sm:border-l sm:border-slate-200 sm:pl-5">
      <span class="hidden text-xs font-bold sm:block">{{ $nama }}</span>
      <span class="grid h-10 w-10 place-items-center rounded-full bg-brand-500 text-white" aria-hidden="true">
        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/></svg>
      </span>
    </div>
  </header>

  <main class="space-y-8 px-4 py-6 sm:px-8">

    <!-- Statistik -->
    <section class="grid gap-5 md:grid-cols-2" aria-label="Ringkasan pesanan">
      <article class="rounded-2xl bg-white p-5 shadow-sm shadow-slate-200/80">
        <div class="flex items-start justify-between">
          <span class="grid h-11 w-11 place-items-center rounded-xl bg-brand-50 text-brand-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V2.5h6V4M9 4v2h6V4"/></svg>
          </span>
        </div>
        <p class="mt-5 text-xs font-semibold uppercase tracking-[0.08em] text-ink-500">Pesanan Aktif</p>
        <p class="mt-2 flex items-baseline gap-2"><span class="font-display text-4xl font-bold leading-none text-brand-500">2</span><span class="text-[11px] text-ink-500">layanan</span></p>
        <p class="mt-3 text-[13px] text-ink-600">1 Dalam Pengerjaan, 1 Menunggu Teknisi</p>
      </article>

      <article class="rounded-2xl bg-white p-5 shadow-sm shadow-slate-200/80">
        <div class="flex items-start justify-between">
          <span class="grid h-11 w-11 place-items-center rounded-xl bg-mitra-50 text-mitra-600">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12A9.5 9.5 0 1 1 16 3.4"/><path d="m8 11.5 4 4L22 5"/></svg>
          </span>
        </div>
        <p class="mt-5 text-xs font-semibold uppercase tracking-[0.08em] text-ink-500">Pesanan Selesai</p>
        <p class="mt-2 flex items-baseline gap-2"><span class="font-display text-4xl font-bold leading-none text-mitra-700">14</span><span class="text-[11px] text-ink-500">selesai total</span></p>
      </article>
    </section>

    <!-- Katalog -->
    <section aria-labelledby="katalog">
      <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
          <div class="flex flex-wrap items-center gap-2.5">
            <h2 id="katalog" class="font-display text-[26px] font-bold leading-tight tracking-tight">Katalog Layanan Jasa</h2>
            <span class="rounded-md bg-brand-100 px-2 py-0.5 text-[11px] font-semibold text-brand-700">8 Kategori Aktif</span>
          </div>
          <p class="mt-1 max-w-xl text-[14px] leading-snug text-ink-600">Pilih teknisi dan penyedia jasa terverifikasi dengan jaminan mutu &amp; garansi pengerjaan</p>
        </div>
        <span class="inline-flex shrink-0 items-center gap-2 self-start rounded-lg bg-white px-4 py-2.5 text-xs font-bold shadow-sm shadow-slate-200/80 sm:self-auto">
          <svg class="h-4 w-4 text-brand-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Wilayah: Bandung
        </span>
      </div>

      <!-- Chip kategori -->
      <div id="chips" class="no-scrollbar -mx-4 mt-5 flex gap-3 overflow-x-auto px-4 pb-1 sm:mx-0 sm:px-0" role="group" aria-label="Kategori jasa">
        <button type="button" data-cat="semua" aria-pressed="true" class="chip shrink-0 rounded-full bg-brand-500 px-4 py-2.5 text-[13px] font-semibold text-white">Semua Jasa</button>
        <button type="button" data-cat="kebersihan" aria-pressed="false" class="chip shrink-0 rounded-full bg-white px-4 py-2.5 text-[13px] font-semibold text-ink-900 shadow-sm shadow-slate-200/80 hover:bg-brand-50">Kebersihan Rumah</button>
        <button type="button" data-cat="ac" aria-pressed="false" class="chip shrink-0 rounded-full bg-white px-4 py-2.5 text-[13px] font-semibold text-ink-900 shadow-sm shadow-slate-200/80 hover:bg-brand-50">Servis AC &amp; Elektronik</button>
        <button type="button" data-cat="pertukangan" aria-pressed="false" class="chip shrink-0 rounded-full bg-white px-4 py-2.5 text-[13px] font-semibold text-ink-900 shadow-sm shadow-slate-200/80 hover:bg-brand-50">Pertukangan &amp; Pipa</button>
        <button type="button" data-cat="listrik" aria-pressed="false" class="chip shrink-0 rounded-full bg-white px-4 py-2.5 text-[13px] font-semibold text-ink-900 shadow-sm shadow-slate-200/80 hover:bg-brand-50">Kelistrikan</button>
        <button type="button" data-cat="taman" aria-pressed="false" class="chip shrink-0 rounded-full bg-white px-4 py-2.5 text-[13px] font-semibold text-ink-900 shadow-sm shadow-slate-200/80 hover:bg-brand-50">Perawatan Taman</button>
        <button type="button" data-cat="sofa" aria-pressed="false" class="chip shrink-0 rounded-full bg-white px-4 py-2.5 text-[13px] font-semibold text-ink-900 shadow-sm shadow-slate-200/80 hover:bg-brand-50">Cuci Sofa &amp; Kasur</button>
      </div>

      <!-- Kartu layanan -->
      <div id="grid" class="mt-6 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">

        <article data-cat="ac" class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200/80">
          <!-- Ganti dengan <img src="..." class="h-full w-full object-cover"> -->
          <div class="relative h-44 bg-gradient-to-b from-slate-300 via-[#e8eefb] to-slate-500">
            <span class="absolute bottom-2.5 left-2.5 rounded bg-white px-2 py-1 text-[11px] font-semibold text-brand-700">Servis AC</span>
          </div>
          <div class="flex flex-1 flex-col p-4">
            <h3 class="font-display text-[17px] font-semibold leading-snug">Cuci AC Split Standar (0.5 - 2 PK)</h3>
            <p class="mt-2 text-[13px] font-bold">Maju Jaya AC</p>
            <p class="mt-1 flex items-center gap-1 text-[13px] text-ink-600">
              <svg class="h-3.5 w-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>Bandung Kulon
            </p>
            <div class="mt-auto flex items-end justify-between gap-3 pt-6">
              <div class="min-w-0">
                <p class="text-[11px] text-ink-600">Mulai dari</p>
                <p class="font-display text-[17px] font-bold leading-tight text-mitra-700">Rp 75.000</p>
                <p class="text-[11px] text-ink-500">/ unit</p>
              </div>
              <a href="#" class="shrink-0 rounded-lg bg-brand-500 px-4 py-2.5 text-center text-xs font-semibold leading-snug text-white hover:bg-brand-600">Pesan<br>Jasa</a>
            </div>
          </div>
        </article>

        <article data-cat="kebersihan" class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200/80">
          <div class="relative h-44 bg-gradient-to-b from-slate-300 via-[#e8eefb] to-slate-500">
            <span class="absolute bottom-2.5 left-2.5 rounded bg-white px-2 py-1 text-[11px] font-semibold text-brand-700">Kebersihan</span>
          </div>
          <div class="flex flex-1 flex-col p-4">
            <h3 class="font-display text-[17px] font-semibold leading-snug">General Deep Cleaning Rumah &amp; Kos</h3>
            <p class="mt-2 text-[13px] font-bold">Resik Bersih Bandung</p>
            <p class="mt-1 flex items-center gap-1 text-[13px] text-ink-600">
              <svg class="h-3.5 w-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>Coblong
            </p>
            <div class="mt-auto flex items-end justify-between gap-3 pt-6">
              <div class="min-w-0">
                <p class="text-[11px] text-ink-600">Mulai dari</p>
                <p class="font-display text-[17px] font-bold leading-tight text-mitra-700">Rp 120.000</p>
                <p class="text-[11px] text-ink-500">/ 2 jam</p>
              </div>
              <a href="#" class="shrink-0 rounded-lg bg-brand-500 px-4 py-2.5 text-center text-xs font-semibold leading-snug text-white hover:bg-brand-600">Pesan<br>Jasa</a>
            </div>
          </div>
        </article>

        <article data-cat="pertukangan" class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200/80">
          <div class="relative h-44 bg-gradient-to-b from-slate-300 via-[#e8eefb] to-slate-500">
            <span class="absolute bottom-2.5 left-2.5 rounded bg-white px-2 py-1 text-[11px] font-semibold text-brand-700">Pertukangan &amp; Pipa</span>
          </div>
          <div class="flex flex-1 flex-col p-4">
            <h3 class="font-display text-[17px] font-semibold leading-snug">Pelancaran Pipa Mampet &amp; Kran Bocor</h3>
            <p class="mt-2 text-[13px] font-bold">Pipa Kilat Pasundan</p>
            <p class="mt-1 flex items-center gap-1 text-[13px] text-ink-600">
              <svg class="h-3.5 w-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>Sukajadi
            </p>
            <div class="mt-auto flex items-end justify-between gap-3 pt-6">
              <div class="min-w-0">
                <p class="text-[11px] text-ink-600">Mulai dari</p>
                <p class="font-display text-[17px] font-bold leading-tight text-mitra-700">Rp 150.000</p>
                <p class="text-[11px] text-ink-500">/ titik</p>
              </div>
              <a href="#" class="shrink-0 rounded-lg bg-brand-500 px-4 py-2.5 text-center text-xs font-semibold leading-snug text-white hover:bg-brand-600">Pesan<br>Jasa</a>
            </div>
          </div>
        </article>

        <article data-cat="sofa" class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200/80">
          <div class="relative h-44 bg-gradient-to-b from-slate-300 via-[#e8eefb] to-slate-500">
            <span class="absolute bottom-2.5 left-2.5 rounded bg-white px-2 py-1 text-[11px] font-semibold text-brand-700">Cuci Sofa</span>
          </div>
          <div class="flex flex-1 flex-col p-4">
            <h3 class="font-display text-[17px] font-semibold leading-snug">Sedot Tungau &amp; Cuci Sofa 3 Seater</h3>
            <p class="mt-2 text-[13px] font-bold">Kinclong Living Care</p>
            <p class="mt-1 flex items-center gap-1 text-[13px] text-ink-600">
              <svg class="h-3.5 w-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>Cicendo
            </p>
            <div class="mt-auto flex items-end justify-between gap-3 pt-6">
              <div class="min-w-0">
                <p class="text-[11px] text-ink-600">Mulai dari</p>
                <p class="font-display text-[17px] font-bold leading-tight text-mitra-700">Rp 180.000</p>
                <p class="text-[11px] text-ink-500">/ sofa</p>
              </div>
              <a href="#" class="shrink-0 rounded-lg bg-brand-500 px-4 py-2.5 text-center text-xs font-semibold leading-snug text-white hover:bg-brand-600">Pesan<br>Jasa</a>
            </div>
          </div>
        </article>
      </div>

      <p id="empty" class="mt-6 hidden rounded-2xl bg-white p-8 text-center text-sm text-ink-500">Tidak ada layanan yang cocok.</p>
    </section>
  </main>
</div>

<script>
  // Sidebar mobile
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('overlay');
  function openMenu(open) {
    sidebar.classList.toggle('-translate-x-full', !open);
    overlay.classList.toggle('hidden', !open);
  }
  document.getElementById('menu-open').addEventListener('click', () => openMenu(true));
  overlay.addEventListener('click', () => openMenu(false));
  document.addEventListener('keydown', e => { if (e.key === 'Escape') openMenu(false); });

  // Filter kategori + pencarian (contoh sisi klien)
  const chips = document.querySelectorAll('.chip');
  const cards = document.querySelectorAll('#grid article');
  const search = document.getElementById('search');
  const empty = document.getElementById('empty');
  let activeCat = 'semua';

  function applyFilter() {
    const q = search.value.trim().toLowerCase();
    let visible = 0;
    cards.forEach(c => {
      const show = (activeCat === 'semua' || c.dataset.cat === activeCat) &&
                   (!q || c.textContent.toLowerCase().includes(q));
      c.classList.toggle('hidden', !show);
      if (show) visible++;
    });
    empty.classList.toggle('hidden', visible > 0);
  }

  chips.forEach(chip => chip.addEventListener('click', () => {
    activeCat = chip.dataset.cat;
    chips.forEach(c => {
      const on = c === chip;
      c.setAttribute('aria-pressed', String(on));
      c.classList.toggle('bg-brand-500', on);
      c.classList.toggle('text-white', on);
      c.classList.toggle('bg-white', !on);
      c.classList.toggle('text-ink-900', !on);
      c.classList.toggle('shadow-sm', !on);
    });
    applyFilter();
  }));
  search.addEventListener('input', applyFilter);
  document.getElementById('search-form').addEventListener('submit', e => { e.preventDefault(); applyFilter(); });
</script>
</body>
</html>