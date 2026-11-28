<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Buat Akun Pelanggan - SIP Jasa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
      colors: {
        brand: { 50: '#eff4ff', 500: '#2563eb', 600: '#1d5be0', 700: '#0b4bc9' },
        amber: { 400: '#f5a623' },
        ink: { 900: '#0b1220', 600: '#475569', 500: '#64748b', 400: '#94a3b8' }
      }
    }
  }
}
</script>
</head>
<body class="min-h-screen bg-[#f6f9fd] font-sans text-ink-900 antialiased">

<main class="grid min-h-screen place-items-center px-4 py-10">
  <div class="grid w-full max-w-[938px] overflow-hidden rounded-[28px] bg-white shadow-xl shadow-slate-300/40 md:grid-cols-[426px_minmax(0,1fr)]">

    <!-- KARTU FOTO -->
    <section class="relative min-h-[320px] overflow-hidden bg-gradient-to-br from-[#d9e2f3] via-[#c8d6ee] to-[#e6dcc8] md:min-h-[497px]">
      <!-- Foto: public/assets/register-pelanggan.jpg -->
      <img src="{{ asset('assets/OrangSantai.jpeg') }}" alt="Pelanggan bersantai di rumah yang rapi dan nyaman"
           width="470" height="497" fetchpriority="high" decoding="async"
           class="absolute inset-0 h-full w-full object-cover object-[50%_35%]">
      <div class="absolute inset-0 bg-gradient-to-t from-[#0c1230] via-[#0c1230]/70 via-35% to-transparent to-65%"></div>

      <a href="{{ url('/') }}" class="absolute left-6 top-6 text-2xl font-bold tracking-tight text-white drop-shadow">SIP JASA</a>

      <div class="absolute inset-x-0 bottom-0 px-6 pb-6 text-white">
        <h2 id="slide-title" class="max-w-sm text-[22px] font-bold leading-[1.2]" aria-live="polite"></h2>
        <p id="slide-text" class="mt-2 max-w-xs text-xs leading-relaxed text-white/75"></p>

        <div class="mt-5 flex items-center gap-4">
          <div class="flex flex-1 gap-2" role="tablist" aria-label="Slide">
            <button type="button" class="bar h-1 flex-1 rounded-full bg-amber-400 transition-colors" role="tab" aria-label="Slide 1"></button>
            <button type="button" class="bar h-1 flex-1 rounded-full bg-white/30 transition-colors" role="tab" aria-label="Slide 2"></button>
            <button type="button" class="bar h-1 flex-1 rounded-full bg-white/30 transition-colors" role="tab" aria-label="Slide 3"></button>
          </div>
          <div class="flex items-center gap-3 text-white/80">
            <button type="button" id="prev" aria-label="Sebelumnya" class="grid h-6 w-6 place-items-center hover:text-white">
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <button type="button" id="next" aria-label="Berikutnya" class="grid h-6 w-6 place-items-center text-white hover:text-white">
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- FORM -->
    <section class="flex flex-col justify-center px-6 py-10 sm:px-10 md:py-12">
      <div class="mx-auto w-full max-w-[400px]">
      <h1 class="text-[32px] font-bold leading-tight tracking-tight">Buat Akun Pelanggan</h1>
      <p class="mt-2 max-w-[18rem] text-sm leading-snug text-ink-500">Daftar dalam satu menit untuk memesan layanan rumah tangga terpercaya.</p>

      <form action="{{ route('register.user.post') }}" method="POST" class="mt-6">
        @csrf
        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
          <label for="name" class="mb-1.5 block text-[13px] font-medium">Nama lengkap</label>
          <input id="name" name="name" type="text" autocomplete="name" required placeholder="Nama sesuai KTP"
                 class="h-10 w-full rounded-lg border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/25">
        </div>

        <div class="mt-5 grid gap-5 sm:grid-cols-2 sm:gap-4">
          <div>
            <label for="email" class="mb-1.5 block text-[13px] font-medium">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required placeholder="nama@email.com"
                   class="h-10 w-full rounded-lg border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/25">
          </div>
          <div>
            <label for="no_telp" class="mb-1.5 block text-[13px] font-medium">Nomor WhatsApp</label>
            <input id="no_telp" name="no_telp" type="tel" inputmode="tel" autocomplete="tel" required placeholder="0812 3456 7890"
                   class="h-10 w-full rounded-lg border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/25">
          </div>
        </div>

        <div class="mt-5">
          <label for="password" class="mb-1.5 block text-[13px] font-medium">Kata sandi</label>
          <input id="password" name="password" type="password" autocomplete="new-password" minlength="8" required placeholder="Minimal 8 karakter"
                 class="h-10 w-full rounded-lg border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/25">
        </div>

        <button type="submit"
                class="mt-6 h-10 w-full rounded-lg bg-brand-500 text-[13px] font-bold text-white transition hover:bg-brand-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-500">
          Buat Akun Pelanggan
        </button>

        <p class="mt-3 text-center text-[13px] text-ink-500">
          Sudah punya akun?
          <a href="{{ route('login') }}" class="ml-1 font-bold text-brand-700 hover:underline">Masuk</a>
        </p>
      </form>
      </div>
    </section>
  </div>
</main>

<script>
  const slides = [
    { t: 'Akhir pekan untuk istirahat, bukan mengurus kerusakan rumah.', d: 'Teknisi terverifikasi KTP datang sesuai jadwal. Bayar tunai (COD) setelah pekerjaan beres.' },
    { t: 'Biaya jelas sejak awal, tanpa kejutan.', d: 'Harga tertera sebelum teknisi datang. Tanpa uang muka dan tanpa biaya tersembunyi.' },
    { t: 'Layanan Bebas Khawatir.', d: 'Layanan bebas khawatir. Ada kendala pasca-pengerjaan? Kami urus kembali sampai tuntas tanpa biaya ekstra.' }
  ];
  const title = document.getElementById('slide-title');
  const text = document.getElementById('slide-text');
  const bars = document.querySelectorAll('.bar');
  let current = 0, timer;

  function show(i) {
    current = (i + slides.length) % slides.length;
    title.textContent = slides[current].t;
    text.textContent = slides[current].d;
    bars.forEach((b, n) => {
      b.classList.toggle('bg-amber-400', n === current);
      b.classList.toggle('bg-white/30', n !== current);
      b.setAttribute('aria-selected', String(n === current));
    });
  }
  function restart() { clearInterval(timer); timer = setInterval(() => show(current + 1), 6000); }

  bars.forEach((b, n) => b.addEventListener('click', () => { show(n); restart(); }));
  document.getElementById('prev').addEventListener('click', () => { show(current - 1); restart(); });
  document.getElementById('next').addEventListener('click', () => { show(current + 1); restart(); });
  show(0); restart();
</script>
</body>
</html>