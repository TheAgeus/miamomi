<div x-data="{ open: @json(session('status_code') === $statusCode) }" x-show="open" class="fixed inset-0 flex items-center justify-center z-50">
  <div class="fixed inset-0 bg-black opacity-50"></div>
  <div class="bg-white p-8 rounded shadow-md z-50">
      <h2 class="text-2xl font-bold mb-4">{{ $header }}</h2>
      <p>{{ session('success') }}</p>
      <div class="mt-4 flex justify-end">
          <button @click="open = false" class="bg-blue-500 text-white px-4 py-2 rounded">Cerrar</button>
      </div>
  </div>
</div>