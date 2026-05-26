<div class="min-h-screen flex items-center justify-center px-5 py-12">
  <div class="w-full max-w-md rounded-xl bg-white border border-slate-200 shadow-sm p-8">
    <a href="/" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-blue-600 mb-8">
      <span aria-hidden="true">&larr;</span>
      Retour au site
    </a>

    <h1 class="text-2xl font-bold text-slate-950 mb-2">Connexion admin</h1>
    <p class="text-sm text-slate-500 mb-7">Accedez au back-office des demandes de devis.</p>

    <form wire:submit.prevent="login" class="space-y-5">
      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
        <input wire:model.live.debounce.300ms="email" type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
        @error('email') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1.5">Mot de passe</label>
        <input wire:model.live.debounce.300ms="password" type="password" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
        @error('password') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
      </div>

      <label class="flex items-center gap-2 text-sm text-slate-600">
        <input wire:model.live="remember" type="checkbox" class="rounded border-slate-300">
        Se souvenir de moi
      </label>

      <button type="submit" class="w-full py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold">
        Se connecter
      </button>
    </form>
  </div>
</div>
