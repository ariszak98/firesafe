<x-layout :user="request()->user()" heading="Create new Company" title="Create new Company - Firesafe">
    

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new Company</h2>
    </div>

  <x-forms.form action="/companies" method="POST" class="space-y-6">

      <div>
          <x-forms.label for="location">Name</x-forms.label>
          <div class="mt-2"> 
            <x-forms.input placeholder="Petrolko" id="name" name="name" required autocomplete="name" />
          </div>
      </div>


      <div class="col-span-full">
            <label for="comments" class="block text-sm/6 font-medium text-gray-900">Comments</label>
            <div class="mt-2">
              <textarea id="comments" name="comments" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
      </div>


      <div>
        <x-button>Save Company</x-button>
      </div>

  </x-forms.form>

</div>



</x-layout>