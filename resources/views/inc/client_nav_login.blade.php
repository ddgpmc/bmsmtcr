
<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">


<header class="bg-gray-900 py-4 md:py-6 w-full">
  <div class="container mx-auto flex items-center justify-between">
    <a href="#" class="flex items-center text-white">
      <img src="{{ URL::asset('images/logos.png') }}" alt="Logo" class="w-12 mr-2">
      <h1 class="text-2xl font-bold">{{ $image->barangay_name ?? 'MITACOR Barangay Management System' }}</h1>
    </a>
  </div>
</header>