<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Masuk Akun - SIP Jasa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
      colors: {
        brand: { 50: '#eff4ff', 100: '#dbe6fe', 500: '#2563eb', 600: '#1d5be0', 700: '#0b4bc9' },
        mitra: { 50: '#e8f7ef', 600: '#0f7a4f', 700: '#0b6a43' },
        ink: { 900: '#0f172a', 600: '#475569', 500: '#64748b', 400: '#94a3b8' }
      }
    }
  }
}
</script>
</head>
<body class="min-h-screen bg-[#f1f3ff] font-sans text-ink-900 antialiased">

<main class="grid min-h-screen place-items-center px-4 py-10">
  <div class="grid w-full max-w-[938px] overflow-hidden rounded-[28px] bg-white shadow-xl shadow-slate-300/40 md:grid-cols-[426px_minmax(0,1fr)]">

    <!-- PANEL KIRI: FOTO + CAPTION -->
    <section class="relative min-h-[320px] overflow-hidden bg-gradient-to-br from-brand-100 via-[#c9d9f7] to-[#e3d9c6] md:min-h-[497px]">
      <!-- Ganti dengan foto kamu: assets/login-teknisi.jpg -->
      <img src="{{ asset('assets/Administrasi.jpeg') }}" alt="Teknisi dan tenaga kebersihan SIP Jasa sedang bekerja di rumah pelanggan"
           width="426" height="497" fetchpriority="high" decoding="async"
           class="absolute inset-0 h-full w-full object-cover object-[50%_30%]">
      <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

      <a href="#" class="absolute left-6 top-6 text-2xl font-extrabold tracking-tight text-white drop-shadow">SIP JASA</a>

      <div class="absolute inset-x-0 bottom-0 p-6 text-white">
        <div id="slides" aria-live="polite">
          <h2 id="slide-title" class="max-w-[17rem] text-[22px] font-bold leading-tight"></h2>
          <p id="slide-text" class="mt-3 max-w-[16rem] text-xs leading-relaxed text-white/85"></p>
        </div>
        <div class="mt-5 flex items-center gap-1.5" role="tablist" aria-label="Slide">
          <button type="button" class="dot h-1.5 rounded-full bg-white transition-all" role="tab" aria-label="Slide 1"></button>
          <button type="button" class="dot h-1.5 rounded-full bg-white/50 transition-all" role="tab" aria-label="Slide 2"></button>
          <button type="button" class="dot h-1.5 rounded-full bg-white/50 transition-all" role="tab" aria-label="Slide 3"></button>
        </div>
      </div>
    </section>

    <!-- PANEL KANAN: FORM -->
    <section class="flex flex-col justify-center px-6 py-10 sm:px-10 md:py-12">
      <div class="mx-auto w-full max-w-[400px]">
      <h1 class="text-2xl font-bold tracking-tight">Selamat Datang!</h1>
      <p class="mt-1 text-[11px] text-ink-500">Satu pintu masuk untuk Pelanggan, Mitra Jasa, &amp; Admin.</p>

      <form action="{{ route('login.post') }}" method="POST" class="mt-5 space-y-4">
        @csrf
        @if ($errors->any())
            <div class="rounded-lg bg-red-100 p-3 text-[11px] text-red-700">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
          <label for="email" class="mb-2 block text-[11px] font-bold">Email</label>
          <input id="email" name="email" type="text" autocomplete="username" required
                 placeholder="contoh@example.com"
                 class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-[11px] placeholder:text-ink-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/20">
        </div>

        <div>
          <label for="password" class="mb-2 block text-[11px] font-bold">Kata Sandi</label>
          <div class="relative">
            <input id="password" name="password" type="password" autocomplete="current-password" required
                   placeholder="Masukkan kata sandi Anda"
                   class="h-10 w-full rounded-xl border border-slate-200 bg-white pl-3 pr-10 text-[11px] placeholder:text-ink-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/20">
            <button type="button" id="toggle-pw" aria-label="Tampilkan kata sandi" aria-pressed="false"
                    class="absolute right-2 top-1/2 grid h-7 w-7 -translate-y-1/2 place-items-center rounded-md text-ink-500 hover:text-ink-900">
              <svg id="eye-on" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
              <svg id="eye-off" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.9 17.9A10.1 10.1 0 0 1 12 19c-6.5 0-10-7-10-7a18 18 0 0 1 5.1-5.9M9.9 4.2A9.1 9.1 0 0 1 12 4c6.5 0 10 7 10 7a18 18 0 0 1-2.2 3.2M1 1l22 22M14.1 14.1a3 3 0 1 1-4.2-4.2"/></svg>
            </button>
          </div>
        </div>

        <button type="submit"
                class="mt-1 flex h-10 w-full items-center justify-center gap-2 rounded-xl bg-brand-500 text-xs font-bold text-white shadow-lg shadow-brand-500/30 transition hover:bg-brand-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-500">
          Masuk
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M15 12H3"/></svg>
        </button>
      </form>

      <div class="mt-9 flex items-center gap-3 text-[10px] text-ink-500">
        <span class="h-px flex-1 bg-slate-200"></span>Belum punya akun?<span class="h-px flex-1 bg-slate-200"></span>
      </div>

      <div class="mt-3 grid grid-cols-2 gap-3">
        <a href="{{ route('register.user') }}" class="flex h-9 items-center justify-center gap-2 rounded-xl border border-brand-500 bg-brand-50 text-[11px] font-bold text-brand-700 transition hover:bg-brand-100">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-7 8-7s8 3 8 7z"/></svg>
          Daftar Pelanggan
        </a>
        <a href="{{ route('register.mitra') }}" class="flex h-9 items-center justify-center gap-2 rounded-xl border border-mitra-600 bg-mitra-50 text-[11px] font-bold text-mitra-700 transition hover:bg-emerald-100">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.1-3.1a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/></svg>
          Daftar Mitra Jasa
        </a>
      </div>

      <p class="mt-6 text-center text-[10px] text-ink-400">© {{ date('Y') }} SIP Jasa </p>
      </div>
    </section>
  </div>
</main>

<script>
  // Tampilkan / sembunyikan kata sandi
  const pw = document.getElementById('password');
  const toggle = document.getElementById('toggle-pw');
  toggle.addEventListener('click', () => {
    const show = pw.type === 'password';
    pw.type = show ? 'text' : 'password';
    toggle.setAttribute('aria-pressed', String(show));
    toggle.setAttribute('aria-label', show ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    document.getElementById('eye-on').classList.toggle('hidden', show);
    document.getElementById('eye-off').classList.toggle('hidden', !show);
  });

  // Carousel caption sederhana
  const slides = [
    { t: 'Penjadwalan & Pemesanan Mudah', d: 'Pesan teknisi dan tenaga kebersihan profesional terpercaya dalam hitungan menit tanpa ribet.' },
    { t: 'Teknisi Terverifikasi & Aman', d: 'Seluruh mitra lolos verifikasi KTP, SKCK, dan uji kompetensi sebelum bertugas.' },
    { t: 'Bayar COD ', d: 'Bayar setelah pekerjaan selesai.' }
  ];
  const title = document.getElementById('slide-title');
  const text = document.getElementById('slide-text');
  const dots = document.querySelectorAll('.dot');
  let current = 0, timer;

  function show(i) {
    current = i;
    title.textContent = slides[i].t;
    text.textContent = slides[i].d;
    dots.forEach((d, n) => {
      d.classList.toggle('w-6', n === i);
      d.classList.toggle('w-1.5', n !== i);
      d.classList.toggle('bg-white', n === i);
      d.classList.toggle('bg-white/50', n !== i);
      d.setAttribute('aria-selected', String(n === i));
    });
  }
  function start() { timer = setInterval(() => show((current + 1) % slides.length), 5000); }
  dots.forEach((d, n) => d.addEventListener('click', () => { clearInterval(timer); show(n); start(); }));
  show(0); start();
</script>
</body>
</html>