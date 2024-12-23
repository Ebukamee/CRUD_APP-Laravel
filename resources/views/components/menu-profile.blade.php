<div class="relative inline-block">
  <!-- Circle button -->
  <div
    class="w-12 h-12 bg-blue-500 rounded-full  flex items-center justify-center text-white cursor-pointer"
    onclick="Dropdown()"
  >
    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
  </div>

  <!-- Dropdown -->
  <div
    id="drop"
    class="absolute  mt-2 w-64 bg-white p-5 shadow-lg rounded-lg   z-50 "
    style="display:none;"
  >
    <div class="mb-4 text-center">
      <p class="text-sm text-black font-semibold">{{ auth()->user()->name }}</p>
      <p class="text-gray-500 text-sm">{{ '@' . auth()->user()->username }}</p>
    </div>
    <ul class="space-y-2">
      <li>
        <a href="/dashboard" class="block text-blue-600 hover:underline">Dashboard</a>
      </li>
      <li>
        <a href="/profile" class="block text-blue-600 hover:underline">Profile</a>
      </li>
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="block text-red-600 hover:underline w-full text-left">
            Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</div>

<script>
  function Dropdown() {
    const drop= document.getElementById("drop");
    if (drop.style.display === "none" || drop.style.display === "") {
      drop.style.display = "block";
    } else {
      drop.style.display = "none";
    }
  }
</script>
