<x-app-layout>
      <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-10">

                <x-slot name="header">
                
                </x-slot> 
                <h1 class="text-lg text-pink-800 font-semibold uppercase mb-2">Projects</h1>
                <div class="rounded w-full mx-auto mt-4">
  <!-- Tabs -->
  <div class="bg-gray-200 rounded">
  <ul id="tabs" class="inline-flex px-1 w-full">
    <li class="flex px-4 py-4 text-gray-500 text-sm  py-3  border-b-2 border-pink-800 text-pink-800 -mb-px">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
</svg>


    <a id="default-tab" href="#first">Published Projects</a></li>
    <li class="flex px-4 text-gray-500 py-4 text-sm  py-3 ">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300">
 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
</svg>

    <a href="#second">Unpublished Projects</a></li>
    <li class="flex px-4 text-gray-500 py-4 text-sm py-3">
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
</svg>

    <a href="#third">Ongoing Projects</a></li>
    <li class="flex px-4 text-gray-500 py-4 text-sm py-3 ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300">
 <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
</svg>


    <a href="#fourth">Reports</a></li>
  </ul>
</div>
  <!-- Tab Contents -->
  <div id="tab-contents">
    <div id="first" class=" bg-gray-50 mt-2 text-gray-600 rounded p-4">
      @livewire('published-projects-component')
    </div>
    <div id="second" class="hidden bg-gray-50 mt-2 text-gray-600 rounded p-4">
        @livewire('unpublished-projects-component')
    </div>
    <div id="third" class="hidden bg-gray-50 mt-2 text-gray-600 rounded p-4">
      Third tab
    </div>
    <div id="fourth" class="hidden bg-gray-50 mt-2 text-gray-600 rounded p-4">
      Fourth tab
    </div>
  </div>
</div>
<script type="text/javascript">
let tabsContainer = document.querySelector("#tabs");
let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

tabTogglers.forEach(function(toggler) {
  toggler.addEventListener("click", function(e) {
    e.preventDefault();
    let tabName = this.getAttribute("href");
    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {
      
      tabTogglers[i].parentElement.classList.remove("border-b-2","border-pink-800","text-pink-800", "-mb-px");  tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");
      
    }
    e.target.parentElement.classList.add("border-b-2","border-pink-800","text-pink-800", "-mb-px");
  });
});

</script>
            </div>
        </div>

    </div>
</x-app-layout>
