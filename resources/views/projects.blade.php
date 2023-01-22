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
                <svg aria-hidden="true" class="w-5 h-5 mr-2  group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
    
    <a id="default-tab" href="#first">Published Projects</a></li>
    <li class="flex px-4 text-gray-500 py-4 text-sm  py-3 ">
                <svg aria-hidden="true" class="w-5 h-5 mr-2  group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
    
    <a href="#second">Unpublished Projects</a></li>
    <li class="flex px-4 text-gray-500 py-4 text-sm py-3">
                <svg aria-hidden="true" class="w-5 h-5 mr-2  group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
   
    <a href="#third">Ongoing Projects</a></li>
    <li class="flex px-4 text-gray-500 py-4 text-sm py-3 ">
                <svg aria-hidden="true" class="w-5 h-5 mr-2 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
    
    <a href="#fourth">Reports</a></li>
  </ul>
</div>
  <!-- Tab Contents -->
  <div id="tab-contents">
    <div id="first" class=" bg-gray-50 mt-2 text-gray-600 rounded p-4">
      @livewire('published-projects-component')
    </div>
    <div id="second" class="hidden bg-gray-50 mt-2 text-gray-600 rounded p-4">
      Second tab
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
