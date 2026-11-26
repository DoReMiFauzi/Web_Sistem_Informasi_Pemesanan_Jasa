<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>SIP Jasa - Solusi Rumah Tangga</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
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
        mitra: { 50: '#e8f5ee', 600: '#0f7a4f', 700: '#0b6a43', 800: '#075a38' },
        ink: { 900: '#0f172a', 600: '#475569', 500: '#64748b' }
      }
    }
  }
}
</script>
<style>
  :root { box-sizing: border-box; padding-top: env(safe-area-inset-top, 0px); padding-bottom: env(safe-area-inset-bottom, 0px); color-scheme: light; }
  html { scroll-padding-top: calc(5rem + env(safe-area-inset-top, 0px)); }
  body { background: #f8faff; }
  details > summary { list-style: none; }
  details > summary::-webkit-details-marker { display: none; }
  details[open] .chev { transform: rotate(180deg); }
  .chev { transition: transform .2s ease; }
</style>
</head>
<body class="font-sans text-ink-900 antialiased">

<!-- NAVBAR -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur shadow-sm">
  <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-5 lg:px-6">
    <a href="#layanan" class="flex items-center gap-3">
      <span class="grid h-9 w-9 place-items-center rounded-xl bg-brand-500 text-white shadow">
        <img src="{{ asset('assets/icon-sipjasa-solid.svg') }}" alt="Logo SIP Jasa" width="55" height="55" fetchpriority="high" decoding="async">
      </span>
      <span class="leading-tight">
        <span class="block font-display text-base font-bold">SIP Jasa</span>
        <span class="block text-[10px] text-ink-500">Solusi Rumah Tangga</span>
      </span>
    </a>
    <nav class="hidden items-center gap-8 text-xs font-semibold text-ink-600 md:flex">
      <a href="#layanan" class="hover:text-brand-700">Layanan</a>
      <a href="#keunggulan" class="hover:text-brand-700">Keunggulan</a>
      <a href="#cara-pesan" class="hover:text-brand-700">Cara Pesan</a>
      <a href="#mitra" class="hover:text-brand-700">Mitra</a>
    </nav>
    <a href="{{ route('login') }}" class="rounded-lg bg-brand-700 px-4 py-2 text-xs font-semibold text-white hover:bg-brand-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-700">Masuk</a>
  </div>
</header>

<main>
<!-- HERO -->
<section id="layanan" class="relative overflow-hidden bg-gradient-to-br from-brand-50 via-[#f5f8ff] to-[#f8faff]">
  <div class="pointer-events-none absolute -left-24 bottom-0 h-80 w-80 rounded-full bg-emerald-200/40 blur-3xl"></div>
  <div class="pointer-events-none absolute right-1/3 top-0 h-72 w-72 rounded-full bg-brand-100/60 blur-3xl"></div>
  <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-5 py-14 lg:grid-cols-2 lg:px-6 lg:py-10">
    <div>
      <h1 class="font-display text-4xl font-bold leading-[1.15] tracking-tight sm:text-5xl lg:max-w-xl">
        Solusi Cepat &amp; Terpercaya untuk Semua <span class="text-brand-500">Kebutuhan Rumah</span> Anda
      </h1>
      <p class="mt-6 max-w-xl text-[15px] leading-relaxed text-ink-600">
        Pesan teknisi AC, instalasi listrik, hingga jasa kebersihan profesional bersertifikasi dalam hitungan menit. Bayar aman di tempat (COD) setelah pekerjaan selesai dengan garansi resmi 30 hari.
      </p>
      <div class="mt-8 flex flex-wrap gap-4">
        <a href="#cara-pesan" class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-500/30 hover:bg-brand-600">
          Jelajahi &amp; Pesan Layanan
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="#mitra" class="inline-flex items-center gap-2 rounded-xl bg-mitra-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-mitra-600/25 hover:bg-mitra-700">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2a1 1 0 1 0 3-3M14 14l2.5 2.5a1 1 0 1 0 3-3l-3.9-3.9a3 3 0 0 0-4.2 0l-.9.9a1 1 0 0 1-1.4 0l-.9-.9a1 1 0 0 1 0-1.4L10 6M3 11l8 8"/></svg>
          Gabung Jadi Mitra Jasa
        </a>
      </div>
      <ul class="mt-8 flex flex-wrap gap-x-6 gap-y-2 text-[11px] font-semibold text-ink-600">
        <li class="flex items-center gap-2 text-brand-600">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V5l8-3 8 3z"/><path d="m9 12 2 2 4-4"/></svg>
          <span class="text-ink-600">Teknisi Lolos Uji SKCK &amp; Sertifikasi</span>
        </li>
        <li class="flex items-center gap-2 text-mitra-600">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>
          <span class="text-ink-600">Bayar Tunai / QRIS Setelah Pengecekan</span>
        </li>
      </ul>
    </div>

        <div class="relative mx-auto aspect-[4/3.4] w-full max-w-sm overflow-hidden rounded-3xl bg-brand-100 shadow-2xl shadow-slate-400/30 lg:ml-auto lg:mr-0 lg:aspect-[9/10] lg:max-w-[392px]">
        <img src="{{ asset('assets/Container.svg') }}" alt="Teknisi sedang melakukan perbaikan AC di rumah pelanggan" width="900" height="1000" fetchpriority="high" decoding="async" class="absolute inset-0 h-full w-full object-cover object-[50%_25%]">
        </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section id="keunggulan" class="mx-auto max-w-7xl px-5 py-20 lg:px-6">
  <div class="text-center">
    <p class="text-[11px] font-bold uppercase tracking-wider text-mitra-600">Keunggulan Standar Mutu</p>
    <h2 class="mt-3 font-display text-4xl font-bold tracking-tight">Standar Layanan Tanpa Kompromi</h2>
    <p class="mx-auto mt-4 max-w-md text-[15px] leading-relaxed text-ink-600">Tiga pilar komitmen kami dalam menghadirkan rasa aman dan kepuasan mutlak di setiap kunjungan.</p>
  </div>
  <div class="mt-14 grid gap-6 md:grid-cols-3">
    <article class="rounded-3xl bg-white p-8 shadow-xl shadow-slate-200/70">
      <span class="grid h-11 w-11 place-items-center rounded-xl bg-brand-50 text-brand-700">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 2v3M8 2v3"/><rect x="3" y="4" width="18" height="18" rx="2"/><circle cx="9" cy="12" r="2"/><path d="M13 11h4M13 15h4M7 18c.5-1 1.2-1.5 2-1.5s1.5.5 2 1.5"/></svg>
      </span>
      <h3 class="mt-6 font-display text-xl font-bold leading-snug">Teknisi Terverifikasi &amp; Bebas Khawatir</h3>
      <p class="mt-3 text-sm leading-relaxed text-ink-600">Seluruh mitra wajib melalui verifikasi KTP, catatan kepolisian (SKCK), uji kompetensi teknis di lapangan, dan pelatihan sopan santun pelayanan pelanggan.</p>
      <p class="mt-6 flex items-center gap-2 text-xs font-bold text-brand-700">Standar Keamanan L1
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m8.5 12 2.5 2.5 4.5-5"/></svg>
      </p>
    </article>
    <article class="rounded-3xl bg-white p-8 shadow-xl shadow-slate-200/70">
      <span class="grid h-11 w-11 place-items-center rounded-xl bg-mitra-50 text-mitra-600">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 3H7a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6H5M9 1v22" transform="scale(.8) translate(2 1)"/><path d="m15 18 2.5 2.5L22 15"/></svg>
      </span>
      <h3 class="mt-6 font-display text-xl font-bold leading-snug">Transparan &amp; Bayar COD</h3>
      <p class="mt-3 text-sm leading-relaxed text-ink-600">Biaya pasti tertera sebelum teknisi datang tanpa biaya tersembunyi. Anda hanya membayar tunai atau transfer setelah pekerjaan selesai dan Anda puas.</p>
      <p class="mt-6 flex items-center gap-2 text-xs font-bold text-mitra-600">Tanpa Uang Muka (DP)
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m8.5 12 2.5 2.5 4.5-5"/></svg>
      </p>
    </article>
    <article class="rounded-3xl bg-white p-8 shadow-xl shadow-slate-200/70">
      <span class="grid h-11 w-11 place-items-center rounded-xl bg-brand-50 text-brand-500">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5z"/><path d="m9 12 2 2 4-4" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </span>
      <h3 class="mt-6 font-display text-xl font-bold leading-snug">Garansi Pengerjaan 30 Hari</h3>
      <p class="mt-3 text-sm leading-relaxed text-ink-600">Jika timbul keluhan atau kendala berulang pasca pengerjaan dalam 30 hari, teknisi kami siap datang kembali untuk perbaikan tanpa dipungut biaya sepeserpun.</p>
      <p class="mt-6 flex items-center gap-2 text-xs font-bold text-brand-700">Proteksi Kepuasan 100%
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m8.5 12 2.5 2.5 4.5-5"/></svg>
      </p>
    </article>
  </div>
</section>

<!-- CARA PESAN -->
<section id="cara-pesan" class="bg-brand-50">
  <div class="mx-auto max-w-7xl px-5 py-20 lg:px-6">
    <div class="text-center">
      <p class="text-[11px] font-bold uppercase tracking-wider text-brand-700">Proses Sederhana</p>
      <h2 class="mt-3 font-display text-4xl font-bold tracking-tight">Tiga Langkah Praktis Rumah Beres</h2>
      <p class="mx-auto mt-4 max-w-md text-sm leading-relaxed text-ink-600">Tidak perlu antre atau menunggu lama. Semua alur pengerjaan terpantau secara transparan.</p>
    </div>
    <ol class="mt-14 grid gap-10 md:grid-cols-3">
      <li>
        <div class="flex items-center gap-3">
          <span class="font-display text-4xl font-bold text-brand-100" style="color:#b9cdf5">01</span>
          <span class="grid h-11 w-11 place-items-center rounded-xl bg-white text-brand-600 shadow-sm">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 13V6a2 2 0 0 0-4 0v9l-2-2a2 2 0 0 0-3 3l4.5 5.5a4 4 0 0 0 3 1.5h2a5 5 0 0 0 5-5v-3a2 2 0 0 0-4 0"/></svg>
          </span>
        </div>
        <h3 class="mt-5 font-display text-lg font-bold">Pilih Layanan &amp; Jadwal</h3>
        <p class="mt-2 max-w-sm text-sm leading-relaxed text-ink-600">Tentukan jenis jasa yang Anda perlukan, pilih tanggal serta jam kedatangan teknisi yang paling cocok dengan kesibukan Anda.</p>
      </li>
      <li>
        <div class="flex items-center gap-3">
          <span class="font-display text-4xl font-bold" style="color:#b4d3cf">02</span>
          <span class="grid h-11 w-11 place-items-center rounded-xl bg-white text-mitra-600 shadow-sm">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </span>
        </div>
        <h3 class="mt-5 font-display text-lg font-bold">Teknisi Tiba Tepat Waktu</h3>
        <p class="mt-2 max-w-sm text-sm leading-relaxed text-ink-600">Teknisi terverifikasi datang membawa identitas resmi dan perkakas lengkap, langsung melakukan inspeksi dan pengerjaan terukur.</p>
      </li>
      <li>
        <div class="flex items-center gap-3">
          <span class="font-display text-4xl font-bold" style="color:#b9cdf5">03</span>
          <span class="grid h-11 w-11 place-items-center rounded-xl bg-white text-brand-600 shadow-sm">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 2 2.4 1.8 3-.2 1 2.8 2.5 1.7-.9 2.9.9 2.9-2.5 1.7-1 2.8-3-.2L12 22l-2.4-1.8-3 .2-1-2.8-2.5-1.7.9-2.9-.9-2.9 2.5-1.7 1-2.8 3 .2z"/><path d="m9 12 2 2 4-4"/></svg>
          </span>
        </div>
        <h3 class="mt-5 font-display text-lg font-bold">Cek Hasil &amp; Bayar COD</h3>
        <p class="mt-2 max-w-sm text-sm leading-relaxed text-ink-600">Periksa hasil pekerjaan bersama teknisi. Jika sudah sesuai, selesaikan pembayaran tunai/QRIS dan nikmati garansi servis 30 hari.</p>
      </li>
    </ol>
  </div>
</section>

<!-- CTA MITRA -->
<section id="mitra" class="mx-auto max-w-7xl px-5 py-16 lg:px-6">
  <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-mitra-600 via-mitra-700 to-mitra-800 p-8 shadow-2xl shadow-emerald-900/20 sm:p-12 lg:p-16">
    <div class="pointer-events-none absolute -right-20 top-0 h-80 w-80 rounded-full bg-white/10 blur-3xl"></div>
    <div class="relative flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
      <div class="max-w-xl text-white">
        <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-[11px] font-semibold">
          <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="height:14px;width:14px"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 20c0-3 2.5-5 6-5s6 2 6 5M16 15c3 0 5 1.5 5 4"/></svg>
          Peluang Kolaborasi Ahli
        </span>
        <h2 class="mt-5 font-display text-3xl font-bold leading-tight sm:text-4xl">Punya Usaha Jasa Rumah Tangga? Perluas Jangkauan Bersama SIP Jasa</h2>
        <p class="mt-4 text-[15px] leading-relaxed text-white/85">Dapatkan orderan rutin setiap hari, pencairan penghasilan cepat tanpa potongan berbelit, dan asuransi kecelakaan kerja selama bertugas.</p>
      </div>
      <a href="{{ route('register.mitra') }}" class="inline-flex items-center gap-2 whitespace-nowrap rounded-xl bg-white px-7 py-4 text-sm font-bold text-mitra-700 shadow-lg hover:bg-emerald-50">
        Daftar Mitra Jasa Sekarang
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="mx-auto max-w-2xl px-5 pb-24 pt-12">
  <div class="text-center">
    <p class="text-[11px] font-bold uppercase tracking-wider text-brand-700">Tanya Jawab</p>
    <h2 class="mt-3 font-display text-4xl font-bold tracking-tight">Pertanyaan yang Sering Diajukan</h2>
    <p class="mt-4 text-sm text-ink-600">Informasi transparan seputar pembayaran, garansi perlindungan, dan kualifikasi mitra kami.</p>
  </div>
  <div class="mt-12 space-y-4">
    <details class="group rounded-2xl bg-white px-5 shadow-lg shadow-slate-200/70">
      <summary class="flex cursor-pointer items-center justify-between py-4 font-display text-[15px] font-bold">
        Bagaimana mekanisme pembayaran COD (Bayar di Tempat)?
        <svg class="chev h-4 w-4 shrink-0 text-ink-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </summary>
      <p class="pb-5 text-sm leading-relaxed text-ink-600">Anda tidak perlu membayar di muka. Setelah teknisi selesai bekerja dan Anda memeriksa hasilnya, pembayaran dilakukan secara tunai atau QRIS langsung kepada teknisi sesuai biaya yang tertera saat pemesanan.</p>
    </details>
    <details class="group rounded-2xl bg-white px-5 shadow-lg shadow-slate-200/70">
      <summary class="flex cursor-pointer items-center justify-between py-4 font-display text-[15px] font-bold">
        Bagaimana cara klaim garansi servis 30 hari jika ada kendala?
        <svg class="chev h-4 w-4 shrink-0 text-ink-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </summary>
      <p class="pb-5 text-sm leading-relaxed text-ink-600">Buka riwayat pesanan, pilih pekerjaan yang bermasalah, lalu ajukan klaim garansi. Tim kami akan menjadwalkan kunjungan ulang tanpa biaya selama masih dalam masa 30 hari.</p>
    </details>
    <details class="group rounded-2xl bg-white px-5 shadow-lg shadow-slate-200/70">
      <summary class="flex cursor-pointer items-center justify-between py-4 font-display text-[15px] font-bold">
        Apakah teknisi yang datang aman dan bersertifikat?
        <svg class="chev h-4 w-4 shrink-0 text-ink-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </summary>
      <p class="pb-5 text-sm leading-relaxed text-ink-600">Ya. Setiap mitra telah melewati verifikasi KTP, SKCK, uji kompetensi teknis, dan pelatihan layanan pelanggan sebelum dapat menerima pesanan.</p>
    </details>
  </div>
</section>
</main>

<!-- FOOTER -->
<footer class="bg-[#0a1033] text-slate-300">
  <div class="mx-auto max-w-7xl px-5 pb-6 pt-12 lg:px-6">
    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
      <div>
        <div class="flex items-center gap-3 text-white">
          <span class="grid h-9 w-9 place-items-center rounded-lg bg-brand-500">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2M2 13h20"/></svg>
          </span>
          <span class="font-display font-bold">SIP Jasa</span>
        </div>
        <p class="mt-4 max-w-xs text-xs leading-relaxed text-slate-400">Platform digital terpercaya pemesanan aneka jasa perbaikan, perawatan, dan kebutuhan operasional rumah tangga profesional.</p>
      </div>
      <div>
        <h4 class="font-display text-sm font-bold text-white">Kategori Layanan</h4>
        <ul class="mt-4 space-y-2.5 text-xs text-slate-400">
          <li><a href="#" class="hover:text-white">Pembersihan Rumah (Cleaning)</a></li>
          <li><a href="#" class="hover:text-white">Service &amp; Perawatan AC</a></li>
          <li><a href="#" class="hover:text-white">Instalasi Listrik &amp; Pipa</a></li>
          <li><a href="#" class="hover:text-white">Tukang Bangunan Harian</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-display text-sm font-bold text-white">Perusahaan</h4>
        <ul class="mt-4 space-y-2.5 text-xs text-slate-400">
          <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
          <li><a href="#mitra" class="hover:text-white">Gabung Menjadi Mitra</a></li>
          <li><a href="#cara-pesan" class="hover:text-white">Panduan Pemesanan</a></li>
          <li><a href="#faq" class="hover:text-white">Pusat Bantuan &amp; Garansi</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-display text-sm font-bold text-white">Kontak &amp; Legal</h4>
        <ul class="mt-4 space-y-2.5 text-xs text-slate-400">
          <li>support@sipjasa.id</li>
          <li>+62 (021) 8089-2345</li>
          <li class="text-[11px] text-slate-500">PT Solusi Inovasi Pemukiman, Jakarta Pusat</li>
        </ul>
        <div class="mt-4 flex gap-2">
          <a href="mailto:support@sipjasa.id" aria-label="Email" class="grid h-8 w-8 place-items-center rounded-full bg-white/10 hover:bg-white/20">
            <svg class="h-3.5 w-3.5" style="height:14px;width:14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>
          </a>
          <a href="tel:+62180892345" aria-label="Telepon" class="grid h-8 w-8 place-items-center rounded-full bg-white/10 hover:bg-white/20">
            <svg style="height:14px;width:14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg>
          </a>
          <a href="#" aria-label="Keamanan" class="grid h-8 w-8 place-items-center rounded-full bg-white/10 hover:bg-white/20">
            <svg style="height:14px;width:14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V5l8-3 8 3z"/></svg>
          </a>
        </div>
      </div>
    </div>
    <div class="mt-10 flex flex-col gap-3 border-t border-white/10 pt-6 text-[11px] text-slate-500 md:flex-row md:items-center md:justify-between">
      <p>© 2025 SIP Jasa (Sistem Informasi Pemesanan Jasa Rumah Tangga). Hak cipta dilindungi.</p>
      <div class="flex flex-wrap gap-x-6 gap-y-2">
        <a href="#" class="hover:text-white">Kebijakan Privasi</a>
        <a href="#" class="hover:text-white">Syarat &amp; Ketentuan</a>
        <a href="#" class="hover:text-white">Standar Mutu &amp; Keamanan</a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>