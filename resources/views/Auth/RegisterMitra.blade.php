<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Daftar Akun Mitra Jasa - SIP Jasa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
      colors: {
        mitra: { 50: '#ecf8f2', 400: '#34d399', 500: '#0b8a5c', 600: '#087a52', 700: '#066a46' },
        ink: { 900: '#0b1220', 600: '#475569', 500: '#64748b', 400: '#94a3b8' }
      }
    }
  }
}
</script>
<style>
    ::-webkit-scrollbar{
        display: none;
    }
</style>
</head>
<body class="min-h-screen bg-[#f5f9fd] font-sans text-ink-900 antialiased">

<main class="grid min-h-screen place-items-center px-4 py-10">
  <div class="grid w-full max-w-[938px] overflow-hidden rounded-[28px] bg-white shadow-xl shadow-slate-300/40 md:grid-cols-[426px_minmax(0,1fr)]">

    <!-- PANEL FOTO -->
    <section class="relative min-h-[320px] overflow-hidden bg-gradient-to-br from-[#5b5f55] via-[#3f4a44] to-[#1c2a26] md:min-h-[497px]">
      <!-- Ganti dengan foto kamu: assets/register-mitra.jpg -->
      <img src="{{ asset('assets/TukangAc.jpeg') }}" alt="Mitra jasa bertopi proyek kuning sedang bekerja"
           width="426" height="497" fetchpriority="high" decoding="async"
           class="absolute inset-0 h-full w-full object-cover object-[40%_30%]">
      <div class="absolute inset-0 bg-gradient-to-t from-[#06201a] via-[#06201a]/65 via-40% to-transparent to-70%"></div>

      <a href="#" class="absolute left-6 top-6 text-2xl font-bold tracking-tight text-white drop-shadow">SIP JASA</a>

      <div class="absolute inset-x-0 bottom-0 px-6 pb-6 text-white">
        <h2 id="slide-title" class="max-w-[19rem] text-[26px] font-bold leading-[1.15]" aria-live="polite"></h2>
        <p id="slide-text" class="mt-3 max-w-sm text-xs leading-relaxed text-white/75"></p>

        <div class="mt-5 flex items-center gap-4">
          <div class="flex flex-1 gap-2" role="tablist" aria-label="Slide">
            <button type="button" class="bar h-1 w-full max-w-[72px] rounded-full bg-mitra-400 transition-colors" role="tab" aria-label="Slide 1"></button>
            <button type="button" class="bar h-1 w-full max-w-[72px] rounded-full bg-white/30 transition-colors" role="tab" aria-label="Slide 2"></button>
            <button type="button" class="bar h-1 w-full max-w-[72px] rounded-full bg-white/30 transition-colors" role="tab" aria-label="Slide 3"></button>
          </div>
          <div class="flex items-center gap-3 text-white">
            <button type="button" id="prev" aria-label="Sebelumnya" class="grid h-6 w-6 place-items-center hover:text-white/70">
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <button type="button" id="next" aria-label="Berikutnya" class="grid h-6 w-6 place-items-center hover:text-white/70">
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- FORM -->
    <section class="flex flex-col justify-center px-6 py-10 sm:px-10 md:py-12">
      <h1 class="text-[30px] font-bold leading-tight tracking-tight">Daftar Akun Mitra Jasa</h1>
      <p class="mt-2 max-w-sm text-xs leading-relaxed text-ink-500">Lengkapi identitas usaha dan KTP untuk verifikasi Admin sebelum menerima pesanan.</p>

      <form action="#" method="POST" enctype="multipart/form-data" class="mt-6">
        <div class="grid gap-x-5 gap-y-4 sm:grid-cols-2">

          <div>
            <label for="owner" class="mb-1.5 block text-xs font-medium">Nama lengkap pemilik</label>
            <div class="relative">
              <input id="owner" name="owner" type="text" autocomplete="name" required placeholder="Nama sesuai KTP"
                     class="h-10 w-full rounded-xl border border-slate-200 bg-white pl-3 pr-9 text-[13px] placeholder:text-ink-400 focus:border-mitra-500 focus:outline-none focus:ring-2 focus:ring-mitra-500/20">
              <svg id="owner-ok" class="pointer-events-none absolute right-3 top-1/2 hidden h-4 w-4 -translate-y-1/2 text-mitra-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3" fill="currentColor"/></svg>
            </div>
          </div>

          <div>
            <label for="business" class="mb-1.5 block text-xs font-medium">Nama usaha / toko</label>
            <input id="business" name="business" type="text" required placeholder="Contoh: Maju Jaya AC"
                   class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-mitra-500 focus:outline-none focus:ring-2 focus:ring-mitra-500/20">
          </div>

          <div>
            <label for="category" class="mb-1.5 block text-xs font-medium">Kategori keahlian</label>
            <select id="category" name="category" required
                    class="h-10 w-full appearance-none rounded-xl border border-slate-200 bg-white bg-[url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%2364748b%22 stroke-width=%222.5%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22><path d=%22m6 9 6 6 6-6%22/></svg>')] bg-[length:14px] bg-[right_0.75rem_center] bg-no-repeat px-3 pr-9 text-[13px] focus:border-mitra-500 focus:outline-none focus:ring-2 focus:ring-mitra-500/20">
              <option value="ac">Servis AC &amp; Elektronik</option>
              <option value="listrik">Instalasi Listrik &amp; Pipa</option>
              <option value="cleaning">Pembersihan Rumah (Cleaning)</option>
              <option value="bangunan">Tukang Bangunan Harian</option>
            </select>
          </div>

          <div>
            <label for="phone" class="mb-1.5 block text-xs font-medium">Nomor WhatsApp</label>
            <input id="phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" required placeholder="0813 xxxx xxxx"
                   class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-mitra-500 focus:outline-none focus:ring-2 focus:ring-mitra-500/20">
          </div>

          <div>
            <label for="email" class="mb-1.5 block text-xs font-medium">Email aktif</label>
            <input id="email" name="email" type="email" autocomplete="email" required placeholder="nama@usaha.com"
                   class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-[13px] placeholder:text-ink-400 focus:border-mitra-500 focus:outline-none focus:ring-2 focus:ring-mitra-500/20">
          </div>

          <div>
            <span class="mb-1.5 block text-xs font-medium">Unggah foto KTP (Wajib)</span>
            <input id="ktp" name="ktp" type="file" accept="image/*,.pdf" required class="peer sr-only">
            <label for="ktp" id="ktp-box"
                   class="flex h-10 cursor-pointer items-center gap-2 rounded-xl border border-dashed border-mitra-400 bg-mitra-50 px-3 text-[11px] text-mitra-700 transition peer-focus-visible:ring-2 peer-focus-visible:ring-mitra-500/40 hover:bg-emerald-100">
              <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
              <span id="ktp-name" class="truncate">Pilih file KTP (JPG/PNG/PDF)</span>
              <span id="ktp-status" class="hidden shrink-0 text-[10px] text-mitra-600">• Siap diverifikasi</span>
            </label>
          </div>

          <div class="sm:col-span-2">
            <label for="password" class="mb-1.5 block text-xs font-medium">Kata sandi</label>
            <div class="relative">
              <input id="password" name="password" type="password" autocomplete="new-password" minlength="8" required placeholder="Minimal 8 karakter"
                     class="h-10 w-full rounded-xl border border-slate-200 bg-white pl-3 pr-10 text-[13px] placeholder:text-ink-400 focus:border-mitra-500 focus:outline-none focus:ring-2 focus:ring-mitra-500/20">
              <button type="button" id="toggle-pw" aria-label="Tampilkan kata sandi" aria-pressed="false"
                      class="absolute right-2 top-1/2 grid h-7 w-7 -translate-y-1/2 place-items-center rounded-md text-ink-500 hover:text-ink-900">
                <svg id="eye-on" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
                <svg id="eye-off" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.9 17.9A10.1 10.1 0 0 1 12 19c-6.5 0-10-7-10-7a18 18 0 0 1 5.1-5.9M9.9 4.2A9.1 9.1 0 0 1 12 4c6.5 0 10 7 10 7a18 18 0 0 1-2.2 3.2M1 1l22 22M14.1 14.1a3 3 0 1 1-4.2-4.2"/></svg>
              </button>
            </div>
          </div>
        </div>

        <button type="submit"
                class="mt-6 h-11 w-full rounded-xl bg-mitra-500 text-[13px] font-bold text-white transition hover:bg-mitra-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mitra-500">
          Ajukan Pendaftaran Mitra
        </button>

        <p class="mt-3 text-center text-xs text-ink-500">
          Sudah punya akun?
          <a href="{{ route('login') }}" class="ml-1 font-bold text-mitra-600 hover:underline">Masuk</a>
        </p>
      </form>
    </section>
  </div>
</main>

<script>
  // Ikon centang pada nama pemilik
  const owner = document.getElementById('owner');
  const ownerOk = document.getElementById('owner-ok');
  owner.addEventListener('input', () => ownerOk.classList.toggle('hidden', owner.value.trim() === ''));

  // Nama file KTP + status
  const ktp = document.getElementById('ktp');
  ktp.addEventListener('change', () => {
    const f = ktp.files[0];
    document.getElementById('ktp-name').textContent = f ? f.name : 'Pilih file KTP (JPG/PNG/PDF)';
    document.getElementById('ktp-status').classList.toggle('hidden', !f);
  });

  // Tampilkan / sembunyikan kata sandi
  const pw = document.getElementById('password');
  const togglePw = document.getElementById('toggle-pw');
  togglePw.addEventListener('click', () => {
    const show = pw.type === 'password';
    pw.type = show ? 'text' : 'password';
    togglePw.setAttribute('aria-pressed', String(show));
    togglePw.setAttribute('aria-label', show ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    document.getElementById('eye-on').classList.toggle('hidden', show);
    document.getElementById('eye-off').classList.toggle('hidden', !show);
  });

  // Carousel caption
  const slides = [
    { t: 'Keahlian Anda layak mendapatkan lebih banyak pelanggan.', d: 'Terima pesanan sesuai jadwal Anda, kelola katalog jasa, dan terima pembayaran tunai (COD) langsung.' },
    { t: 'Orderan rutin setiap hari, tanpa repot cari pelanggan.', d: 'Pesanan masuk langsung ke ponsel Anda sesuai kategori keahlian dan area layanan.' },
    { t: 'Bekerja tenang dengan asuransi kecelakaan kerja.', d: 'Mitra terverifikasi mendapat perlindungan selama bertugas dan pencairan penghasilan yang cepat.' }
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
      b.classList.toggle('bg-mitra-400', n === current);
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