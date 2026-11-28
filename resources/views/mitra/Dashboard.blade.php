<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Dashboard Mitra - SIP Jasa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<style>
    ::-webkit-scrollbar{
        display: none;
    }
    </style>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        display: ['"Plus Jakarta Sans"', 'Inter', 'system-ui', 'sans-serif']
      },
      colors: {
        side: { DEFAULT: '#1f2f4a', hover: '#293a58' },
        brand: { 50: '#eff4ff', 100: '#dbe6fe', 500: '#2563eb', 600: '#1d5be0', 700: '#0b4bc9' },
        mitra: { 50: '#e8f7ef', 400: '#6ee7b7', 500: '#128a5b', 600: '#0f7a4f', 700: '#0b6a43' },
        ink: { 900: '#0f172a', 600: '#475569', 500: '#64748b', 400: '#94a3b8' }
      }
    }
  }
}
</script>
</head>
<body class="min-h-screen bg-[#f6f8fd] font-sans text-ink-900 antialiased">

<div id="overlay" class="fixed inset-0 z-30 hidden bg-black/50 lg:hidden"></div>

<!-- ============ SIDEBAR ============ -->
<aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex w-[256px] -translate-x-full flex-col bg-side text-slate-200 transition-transform duration-200 lg:translate-x-0" aria-label="Navigasi mitra">
  <div class="flex items-center gap-3 px-6 pb-6 pt-6">
    <span class="grid h-10 w-10 place-items-center rounded-xl bg-white text-brand-500">
        <img src="{{ asset('assets/icon-sipjasa-green.svg') }}" alt="Logo SIP Jasa" class="h-10 w-10">
    </span>
    <span class="font-display text-[15px] font-semibold text-white">SIP JASA</span>
  </div>

  <nav class="flex-1 px-4 pt-3 text-[15px]">
    <p class="mb-3 px-2 text-[11px] font-semibold uppercase tracking-[0.1em] text-slate-300">Navigasi Mitra</p>

    <a href="#" aria-current="page" class="flex items-center gap-3 rounded-lg bg-mitra-500 px-3 py-2.5 font-semibold text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9" rx="1"/><rect x="14" y="3" width="7" height="5" rx="1"/><rect x="14" y="12" width="7" height="9" rx="1"/><rect x="3" y="16" width="7" height="5" rx="1"/></svg>
      Dashboard
    </a>
    <a href="#" class="mt-2 flex items-center gap-3 rounded-lg px-3 py-2.5 font-medium text-slate-300 hover:bg-side-hover hover:text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2M2 13h20M10 13v2h4v-2"/></svg>
      Katalog Jasa Saya
    </a>
    <a href="#" class="mt-2 flex items-center gap-3 rounded-lg px-3 py-2.5 font-medium text-slate-300 hover:bg-side-hover hover:text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 3h14v18l-3-2-2 2-2-2-2 2-2-2-3 2z"/><path d="M9 8h6M9 12h6"/></svg>
      Pesanan Masuk
      <span class="ml-auto mr-1 grid h-5 min-w-5 place-items-center rounded-full bg-red-600 px-1.5 text-[11px] font-bold text-white">4</span>
    </a>
    <a href="#" class="mt-2 flex items-center gap-3 rounded-lg px-3 py-2.5 font-medium text-slate-300 hover:bg-side-hover hover:text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1.5-5h15L21 9M3 9v11h18V9M3 9c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3M9 20v-5h6v5"/></svg>
      Profil Toko
    </a>
  </nav>

  <form action="{{ route('mitra.logout') }}" method="POST" class="p-4 pb-6">
    @csrf
    <button type="submit" class="flex w-full items-center justify-start gap-2 rounded-lg px-3 py-2.5 text-[15px] font-medium text-rose-100 hover:bg-side-hover">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/></svg>
      Keluar Akun
    </button>
  </form>
</aside>

<!-- ============ KONTEN ============ -->
<div class="lg:pl-[256px]">

  <!-- Top bar -->
  <header class="sticky top-0 z-20 flex h-20 items-center justify-between border-b border-slate-100 bg-white px-4 sm:px-6">
    <div class="flex items-center gap-3">
      <button type="button" id="menu-open" aria-label="Buka menu" class="grid h-9 w-9 shrink-0 place-items-center rounded-lg border border-slate-200 lg:hidden">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
      <div>
        <nav aria-label="Breadcrumb" class="flex items-center gap-1 text-[11px] text-ink-600">
          Portal Mitra
          <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 6 6 6-6 6"/></svg>
          <span aria-current="page" class="font-medium text-brand-700">Dashboard</span>
        </nav>
        <p class="font-display text-xl font-semibold leading-tight">{{ $namaUsaha }}</p>
      </div>
    </div>
    <div class="flex items-center gap-3">
      <span class="grid h-10 w-10 place-items-center rounded-full bg-brand-700 text-white" aria-hidden="true">
        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/></svg>
      </span>
      <div class="hidden leading-tight sm:block">
        <p class="font-display text-[15px] font-semibold">{{ $nama }}</p>
        <p class="text-[11px] text-ink-600">Mitra Penyedia</p>
      </div>
    </div>
  </header>

  <main class="space-y-6 px-4 pb-12 pt-0 sm:px-6">

    <!-- Header ringkasan -->
    <header class="rounded-b-2xl border-l-4 border-brand-700 bg-white px-6 py-5 shadow-sm shadow-slate-200/80">
      <h1 class="font-display text-2xl font-semibold tracking-tight">Ringkasan Operasional Mitra</h1>
      <p class="mt-1.5 text-[13px] text-ink-600">Pantau pendapatan harian, konfirmasi pesanan masuk, dan jadwal pekerjaan teknisi secara real-time.</p>
    </header>

    <!-- Statistik -->
    <section class="grid gap-4 md:grid-cols-3" aria-label="Statistik">
      <article class="relative overflow-hidden rounded-2xl bg-white p-6 shadow-sm shadow-slate-200/80">
        <div class="flex items-start justify-between gap-3">
          <div>
            <p class="text-[11px] font-semibold uppercase tracking-[0.06em] text-ink-600">Total Pendapatan</p>
            <p class="mt-1 w-6 font-display text-[32px] font-bold leading-tight">Rp 4.820.000.000</p>
          </div>
          <span class="grid h-12 w-12 shrink-0 place-items-center rounded-full bg-mitra-400/70 text-mitra-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2.5"/><path d="M6 12h.01M18 12h.01"/></svg>
          </span>
        </div>
      </article>

      <article class="relative overflow-hidden rounded-2xl bg-white p-6 shadow-sm shadow-slate-200/80">
        <div class="pointer-events-none absolute -bottom-10 -right-10 h-32 w-32 rounded-full bg-brand-50"></div>
        <div class="relative flex items-start justify-between gap-3">
          <div>
            <p class="text-[11px] font-semibold uppercase tracking-[0.06em] text-ink-600">Pesanan Masuk Baru</p>
            <p class="mt-1 font-display text-[32px] font-bold leading-tight text-brand-600">4 Pesanan</p>
          </div>
          <span class="grid h-12 w-12 shrink-0 place-items-center rounded-full bg-brand-100 text-brand-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M12 8v6m0 0-3-3m3 3 3-3M8 17h8"/></svg>
          </span>
        </div>
        <p class="relative mt-4 flex items-center gap-1.5 text-[13px] font-medium text-red-700"><span class="h-2 w-2 rounded-full bg-red-600"></span>Memerlukan konfirmasi segera</p>
      </article>

      <article class="relative overflow-hidden rounded-2xl bg-white p-6 shadow-sm shadow-slate-200/80">
        <div class="pointer-events-none absolute -bottom-10 -right-10 h-32 w-32 rounded-full bg-brand-50"></div>
        <div class="relative flex items-start justify-between gap-3">
          <div>
            <p class="text-[11px] font-semibold uppercase tracking-[0.06em] text-ink-600">Pekerjaan Hari Ini</p>
            <p class="mt-1 font-display text-[32px] font-bold leading-tight">3 Jadwal</p>
          </div>
          <span class="grid h-12 w-12 shrink-0 place-items-center rounded-full bg-brand-100 text-brand-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18M9 16l2 2 4-4"/></svg>
          </span>
        </div>
        <p class="relative mt-4 flex items-center gap-1.5 text-[13px] text-ink-600">
          <svg class="h-5 w-5 text-brand-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
          1 dalam pengerjaan, 2 menunggu
        </p>
      </article>
    </section>

    <!-- Pekerjaan hari ini -->
    <section class="rounded-2xl bg-white p-6 shadow-sm shadow-slate-200/80" aria-labelledby="pekerjaan">
      <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div class="flex items-center gap-3">
          <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg bg-brand-100 text-brand-700">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V2.5h6V4M9 11h6M9 15h6"/></svg>
          </span>
          <div class="leading-tight">
            <h2 id="pekerjaan" class="font-display text-xl font-semibold">Pekerjaan Hari Ini</h2>
            <p class="mt-1 text-[13px] text-ink-600">Sabtu, 15 November 2026 • Area Bandung Kota</p>
          </div>
        </div>

        <div id="tabs" class="no-scrollbar flex gap-1 self-start overflow-x-auto rounded-lg bg-brand-50 p-1 text-xs font-semibold text-ink-600" role="group" aria-label="Filter status pekerjaan">
          <button type="button" data-filter="semua" aria-pressed="true" class="tab shrink-0 whitespace-nowrap rounded-md bg-white px-4 py-2 font-bold text-brand-700 shadow-sm">Semua (3)</button>
          <button type="button" data-filter="jalan" aria-pressed="false" class="tab shrink-0 whitespace-nowrap rounded-md px-4 py-2">Dalam Perjalanan (1)</button>
          <button type="button" data-filter="belum" aria-pressed="false" class="tab shrink-0 whitespace-nowrap rounded-md px-4 py-2">Belum Jalan (1)</button>
          <button type="button" data-filter="selesai" aria-pressed="false" class="tab shrink-0 whitespace-nowrap rounded-md px-4 py-2">Selesai (0)</button>
        </div>
      </div>

      <ul id="jobs" class="mt-6 space-y-4">

        <li data-status="jalan" class="rounded-xl bg-[#f1f5fd] p-4">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <p class="flex items-center gap-1.5 text-xs font-bold text-brand-700">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
              14:00 WIB (Aktif Sekarang)
            </p>
            <span class="flex items-center gap-1.5 rounded-full bg-brand-100 px-3 py-1 text-[11px] font-semibold text-brand-700"><span class="h-1.5 w-1.5 rounded-full bg-brand-500"></span>Dalam Perjalanan</span>
          </div>
          <div class="mt-2 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
              <h3 class="font-display text-base font-medium">Cuci AC Split Standar 1 PK</h3>
              <p class="mt-1 flex flex-wrap items-center gap-x-1.5 gap-y-1 text-[13px] text-ink-600">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                <span class="font-medium text-ink-900">Budi Santoso</span><span aria-hidden="true">•</span>
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Jl. Sukajadi No. 132, Bandung
              </p>
            </div>
            <div class="flex flex-wrap gap-2">
              <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-white px-3.5 py-2 text-xs font-semibold shadow-sm hover:bg-slate-50">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>Lihat Detail
              </a>
              <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-mitra-500 px-3.5 py-2 text-xs font-semibold text-white hover:bg-mitra-600">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m5 12 5 5 9-10"/></svg>Selesaikan Pengerjaan
              </button>
            </div>
          </div>
        </li>

        <li data-status="belum" class="rounded-xl bg-[#f1f5fd] p-4">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <p class="flex items-center gap-1.5 text-xs font-semibold text-ink-900">
              <svg class="h-5 w-5 text-ink-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
              16:30 WIB
            </p>
            <span class="flex items-center gap-1.5 rounded-full bg-indigo-100 px-3 py-1 text-[11px] font-semibold text-ink-600"><span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span>Belum Jalan</span>
          </div>
          <div class="mt-2 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
              <h3 class="font-display text-base font-medium">Servis AC &amp; Isi Freon R32</h3>
              <p class="mt-1 flex flex-wrap items-center gap-x-1.5 gap-y-1 text-[13px] text-ink-600">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                <span class="font-medium text-ink-900">Siti Aminah</span><span aria-hidden="true">•</span>
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Jl. Buahbatu No. 45, Bandung
              </p>
            </div>
            <div class="flex flex-wrap gap-2">
              <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-white px-3.5 py-2 text-xs font-semibold shadow-sm hover:bg-slate-50">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>Lihat Detail
              </a>
              <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-mitra-500 px-3.5 py-2 text-xs font-semibold text-white hover:bg-mitra-600">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m10 8 6 4-6 4z"/></svg>Mulai Kerja
              </button>
            </div>
          </div>
        </li>

        <li data-status="belum" class="rounded-xl bg-[#f1f5fd] p-4">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <p class="flex items-center gap-1.5 text-xs font-semibold text-ink-900">
              <svg class="h-5 w-5 text-ink-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
              18:00 WIB
            </p>
            <span class="flex items-center gap-1.5 rounded-full bg-indigo-100 px-3 py-1 text-[11px] font-semibold text-ink-600"><span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span>Belum Jalan</span>
          </div>
          <div class="mt-2 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
              <h3 class="font-display text-base font-medium">Bongkar Pasang AC 1.5 PK</h3>
              <p class="mt-1 flex flex-wrap items-center gap-x-1.5 gap-y-1 text-[13px] text-ink-600">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                <span class="font-medium text-ink-900">Ahmad Fauzi</span><span aria-hidden="true">•</span>
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Jl. Dago Asri No. 12, Bandung
              </p>
            </div>
            <div class="flex flex-wrap gap-2">
              <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-white px-3.5 py-2 text-xs font-semibold shadow-sm hover:bg-slate-50">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>Lihat Detail
              </a>
              <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-mitra-500 px-3.5 py-2 text-xs font-semibold text-white hover:bg-mitra-600">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m10 8 6 4-6 4z"/></svg>Mulai Kerja
              </button>
            </div>
          </div>
        </li>
      </ul>

      <p id="empty" class="mt-6 hidden rounded-xl bg-[#f1f5fd] p-8 text-center text-sm text-ink-500">Belum ada pekerjaan pada status ini.</p>
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

  // Filter status pekerjaan (contoh sisi klien)
  const tabs = document.querySelectorAll('.tab');
  const jobs = document.querySelectorAll('#jobs > li');
  const empty = document.getElementById('empty');

  tabs.forEach(tab => tab.addEventListener('click', () => {
    const f = tab.dataset.filter;
    tabs.forEach(t => {
      const on = t === tab;
      t.setAttribute('aria-pressed', String(on));
      t.classList.toggle('bg-white', on);
      t.classList.toggle('text-brand-700', on);
      t.classList.toggle('font-bold', on);
      t.classList.toggle('shadow-sm', on);
    });
    let visible = 0;
    jobs.forEach(j => {
      const show = f === 'semua' || j.dataset.status === f;
      j.classList.toggle('hidden', !show);
      if (show) visible++;
    });
    empty.classList.toggle('hidden', visible > 0);
  }));
</script>
<style>.no-scrollbar::-webkit-scrollbar{display:none}.no-scrollbar{scrollbar-width:none}</style>
</body>
</html>