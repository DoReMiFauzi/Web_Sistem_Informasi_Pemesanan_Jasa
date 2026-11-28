<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Dashboard Admin - SIP Jasa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<style>
  /* Custom scrollbar for sidebar */
  ::-webkit-scrollbar {
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
        navy: { 900: '#0b1224', 800: '#121b30', 700: '#1a2540' },
        brand: { 50: '#eff4ff', 100: '#dbe6fe', 500: '#2563eb', 600: '#1d5be0', 700: '#0b4bc9' },
        mitra: { 50: '#e8f7ef', 600: '#0f7a4f', 700: '#0b6a43' },
        ink: { 900: '#0f172a', 600: '#475569', 500: '#64748b', 400: '#94a3b8' }
      }
    }
  }
}
</script>
</head>
<body class="min-h-screen bg-[#f6f8fd] font-sans text-ink-900 antialiased">

<!-- Overlay mobile -->
<div id="overlay" class="fixed inset-0 z-30 hidden bg-black/50 lg:hidden"></div>

<!-- ============ SIDEBAR ============ -->
<aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex w-[260px] -translate-x-full flex-col overflow-y-auto bg-navy-900 text-slate-400 transition-transform duration-200 lg:translate-x-0" aria-label="Navigasi admin">
  <div class="flex items-center gap-3 px-8 pb-6 pt-6">
    <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand-500 text-white shadow-lg shadow-brand-500/40">
        <img src="{{ asset('assets/icon-sipjasa-solid.svg') }}" alt="Logo SIP Jasa" class="h-10 w-10">
    </span>
    <div class="leading-tight">
      <div class="flex items-center gap-1.5">
        <span class="font-display text-[15px] font-bold text-white">SIP Jasa</span>
      </div>
      <span class="text-[10px] font-semibold uppercase tracking-[0.12em] text-slate-500">Admin</span>
    </div>
  </div>

  <nav class="flex-1 px-3 pb-6 text-[13px]">
    <p class="mb-3 mt-5 px-3 text-[10px] font-bold uppercase tracking-[0.14em] text-slate-300">Operasional Utama</p>

    <a href="#" aria-current="page" class="flex items-center gap-3 rounded-xl px-3 py-2.5 font-medium bg-brand-500 text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 14l4-4"/><path d="M3.3 17a10 10 0 1 1 17.4 0"/><path d="M3.3 17h17.4"/></svg>
      Dashboard
    </a>

    <a href="#" class="mt-1 flex items-center gap-3 rounded-xl px-3 py-2.5 font-medium hover:bg-navy-800 hover:text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="4"/><path d="M2 21c0-3.5 3-6 7-6M16 19l2 2 4-4"/></svg>
      Approval Mitra
      @if($totalMitraNonAktif > 0)
      <span class="ml-auto grid h-5 min-w-5 place-items-center rounded-full bg-red-500 px-1.5 text-[11px] font-bold text-white">{{ $totalMitraNonAktif }}</span>
      @endif
    </a>

    <!-- Kelola Pengguna + submenu -->
    <button type="button" id="users-toggle" aria-expanded="true" aria-controls="users-menu"
            class="mt-2 flex w-full items-center gap-3 rounded-xl px-3 py-3 hover:bg-navy-800 font-semibold hover:text-white shadow-lg ">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="3"/><circle cx="5" cy="9" r="2"/><circle cx="19" cy="9" r="2"/><path d="M7 20c0-3 2.2-5 5-5s5 2 5 5M1 19c0-2 1.5-3.5 4-3.5M23 19c0-2-1.5-3.5-4-3.5"/></svg>
      Kelola Pengguna
      <svg id="users-chevron" class="ml-auto h-4 w-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
    </button>

    <ul id="users-menu" class="relative ml-[17px] mt-2 space-y-1 border-l-2 border-brand-500 pl-[17px]">
      <li>
        <a href="#" aria-current="page" class="flex items-center gap-3 rounded-lg px-3 py-2 hover:text-white">
          <span class="h-1.5 w-1.5 rounded-full bg-slate-600""></span>
          Data Pelanggan
          <span class="ml-auto text-xs text-slate-500">{{ $totalPelanggan }}</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 hover:text-white">
          <span class="h-1.5 w-1.5 rounded-full bg-slate-600"></span>
          <span class="leading-tight">Data<br>Mitra</span>
          <span class="ml-auto text-xs text-slate-500">{{ $totalMitra }}</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2.5 hover:text-white">
          <span class="h-1.5 w-1.5 rounded-full bg-slate-600"></span>
          Kategori Layanan
          <span class="ml-auto text-xs text-slate-500">6</span>
        </a>
      </li>
    </ul>

    <p class="mb-3 mt-9 px-3 text-[10px] font-bold uppercase tracking-[0.14em] text-slate-500">Manajemen &amp; Kontrol</p>
    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2.5 font-medium hover:bg-navy-800 hover:text-white">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7z"/></svg>
      Profil Admin
    </a>

    <p class="mb-3 mt-8 px-3 text-[10px] font-bold uppercase tracking-[0.14em] text-slate-500">Lainnya</p>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
      <button type="submit" class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 font-medium text-red-500 hover:bg-red-500/10">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/></svg>
        Keluar / Logout
      </button>
    </form>
  </nav>
</aside>

<!-- ============ KONTEN ============ -->
<div class="lg:pl-[260px]">

  <!-- Top bar mobile -->
  <div class="sticky top-0 z-20 flex items-center gap-3 border-b border-slate-200 bg-white/90 px-4 py-3 backdrop-blur lg:hidden">
    <button type="button" id="menu-open" aria-label="Buka menu" class="grid h-9 w-9 place-items-center rounded-lg border border-slate-200">
      <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <span class="font-display text-sm font-bold">SIP Jasa Admin</span>
  </div>

  <main class="mx-auto max-w-[1080px] space-y-5 p-4 sm:p-6 lg:p-8">

    <!-- Header -->
    <header class="flex flex-col gap-4 rounded-2xl bg-white p-6 shadow-sm shadow-slate-200/80 md:flex-row md:items-center md:justify-between">
      <div>
        <h1 class="flex items-center gap-2.5 font-display text-2xl font-bold tracking-tight">
          <span class="h-6 w-2 rounded-full bg-brand-700"></span>
          Ringkasan Sistem SIP Jasa
        </h1>
        <p class="mt-1.5 max-w-xl text-sm leading-relaxed text-ink-600">Pantau pertumbuhan platform, verifikasi mitra, metrik transaksi riil, dan performa operasional seluruh wilayah secara real-time.</p>
      </div>
    </header>

    <!-- Kartu statistik -->
    <section class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4 lg:gap-4" aria-label="Statistik utama">

<article class="flex flex-col justify-start gap-3 rounded-2xl bg-white p-4 shadow-sm shadow-slate-200/80 xl:p-5">
        <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand-50 text-brand-700">
        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6M16 4.5a3.5 3.5 0 0 1 0 7M22 20c0-3-2-5-5-5.7"/></svg>
        </span>
        <div class="mt-auto pt-5">
        <p class="text-[10px] font-semibold uppercase tracking-[0.1em] text-ink-500">Total Pelanggan</p>
        <p class="mt-1 flex flex-wrap items-baseline gap-x-2"><span class="font-display text-[22px] font-bold leading-tight xl:text-[26px]">{{ $totalPelanggan }}</span><span class="text-xs text-ink-500">Terdaftar</span></p>
        </div>
    </article>

<article class="flex flex-col justify-start gap-3 rounded-2xl bg-white p-4 shadow-sm shadow-slate-200/80 xl:p-5">
        <span class="grid h-10 w-10 place-items-center rounded-xl bg-mitra-50 text-mitra-600">
        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1.5-5h15L21 9M3 9v11h18V9M3 9c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3M9 20v-5h6v5"/></svg>
        </span>
        <div class="mt-auto pt-5">
        <p class="text-[10px] font-semibold uppercase tracking-[0.1em] text-ink-500">Mitra Jasa Aktif</p>
        <p class="mt-1 flex flex-wrap items-baseline gap-x-2"><span class="font-display text-[22px] font-bold leading-tight text-mitra-700 xl:text-[26px]">{{ $totalMitraAktif }}</span><span class="text-xs text-ink-500">Mitra Resmi</span></p>
        </div>
    </article>

<article class="flex flex-col justify-start gap-3 rounded-2xl bg-white p-4 shadow-sm shadow-slate-200/80 xl:p-5">
        <div class="flex items-center gap-2">
        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-brand-50 text-brand-700">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V5l8-3 8 3z"/><path d="m9 12 2 2 4-4"/></svg>
        </span>
        @if($totalMitra - $totalMitraAktif > 0)
        <span class="flex items-center gap-1.5 rounded-full bg-red-100 px-2.5 py-1.5 text-[10px] font-semibold leading-tight text-red-700">
            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-red-600"></span>{{ $totalMitra - $totalMitraAktif }} Butuh Tindakan
        </span>
            @endif
        </div>
        <div class="mt-auto pt-5">
        <p class="text-[10px] font-semibold uppercase tracking-[0.1em] text-ink-500">Permintaan Verifikasi</p>
        <p class="mt-1 flex flex-wrap items-baseline gap-x-2"><span class="font-display text-[22px] font-bold leading-tight xl:text-[26px]">{{ $totalMitraNonAktif }}</span><span class="text-xs text-ink-500">Berkas</span></p>
        @if($totalMitraNonAktif > 0)
        <a href="#" class="mt-3 flex items-center justify-between gap-2 rounded-lg bg-brand-50/70 px-2.5 py-2 text-[11px] text-ink-500 hover:bg-brand-50">
            <span class="truncate">KTP, Jasa ...</span>
            <span class="flex shrink-0 items-center gap-1 font-bold text-brand-500">Proses
            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </span>
        </a>
            @endif
        </div>
    </article>

    <article class="flex flex-col rounded-2xl bg-white p-4 shadow-sm shadow-slate-200/80 xl:p-5">
        <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand-50 text-brand-700">
        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2.5"/><path d="M6 12h.01M18 12h.01"/></svg>
        </span>
        <div class="mt-auto pt-5">
        <p class="text-[10px] font-semibold uppercase tracking-[0.1em] text-ink-500">Total Nilai Transaksi</p>
        <p class="mt-1 flex flex-wrap items-baseline gap-x-1.5 text-mitra-700"><span class="text-sm font-bold">Rp</span><span class="whitespace-nowrap font-display text-[17px] font-bold leading-tight xl:text-xl 2xl:text-[22px]">0</span></p>
        </div>
    </article>
    </section>

    <!-- Aktivitas terbaru -->
    <section class="rounded-2xl bg-white p-6 shadow-sm shadow-slate-200/80" aria-labelledby="aktivitas">
      <div class="flex items-center justify-between border-b border-slate-100 pb-5">
        <h2 id="aktivitas" class="font-display text-xl font-bold tracking-tight">Aktivitas Terbaru</h2>
        <a href="#" class="text-xs font-bold text-brand-700 hover:underline">Lihat Semua</a>
      </div>

      <ul class="mt-5 space-y-4">
        <li class="flex gap-3 rounded-xl border border-brand-100 bg-brand-50/60 p-3.5">
          <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-brand-100 text-brand-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.1-3.1a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/></svg>
          </span>
          <div class="min-w-0 flex-1">
            <div class="flex items-start justify-between gap-3">
              <p class="text-[13px] font-bold">Pengajuan Jasa Baru • Maju Jaya AC</p>
              <span class="shrink-0 text-[11px] font-bold text-brand-700">Baru saja</span>
            </div>
            <p class="mt-1 text-[13px] text-ink-600">Mengajukan layanan "Cuci AC Cassette &amp; Standing Floor" (Rp 175.000)</p>
            <div class="mt-2 flex flex-wrap items-center gap-3">
              <span class="rounded border border-amber-300 bg-amber-100 px-2 py-1 text-[11px] font-medium text-amber-800">Menunggu ACC Admin</span>
              <a href="#" class="flex items-center gap-1 text-xs font-semibold text-brand-700 hover:underline">Tinjau di Data Mitra
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
              </a>
            </div>
          </div>
        </li>

        <li class="flex gap-3 border-b border-slate-200 p-3.5 pb-6">
          <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1.5-5h15L21 9M3 9v11h18V9M3 9c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3M9 20v-5h6v5"/></svg>
          </span>
          <div class="min-w-0 flex-1">
            <div class="flex items-start justify-between gap-3">
              <p class="text-[13px] font-bold">Bintang AC Sejahtera</p>
              <span class="shrink-0 text-[11px] text-ink-500">2 mnt lalu</span>
            </div>
            <p class="mt-1 text-[13px] text-ink-600">Mengajukan verifikasi toko baru di Surabaya Barat</p>
            <span class="mt-2 inline-block rounded bg-amber-50 px-2 py-1 text-[11px] font-medium text-amber-800">Menunggu Verifikasi</span>
          </div>
        </li>
      </ul>
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

  // Submenu Kelola Pengguna
  const usersToggle = document.getElementById('users-toggle');
  const usersMenu = document.getElementById('users-menu');
  const usersChevron = document.getElementById('users-chevron');
  usersToggle.addEventListener('click', () => {
    const open = usersToggle.getAttribute('aria-expanded') !== 'true';
    usersToggle.setAttribute('aria-expanded', String(open));
    usersMenu.classList.toggle('hidden', !open);
    usersChevron.classList.toggle('rotate-180', !open);
  });
</script>
</body>
</html>