<x-layout :user="request()->user()" heading="Create new Job" title="Create new Job - Firesafe">
    

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new Job</h2>
    </div>

  <x-forms.form action="/jobs" method="POST" class="space-y-6">

        <div>
            <x-forms.label for="location">Location</x-forms.label>
            <div class="mt-2"> 
            <x-forms.input placeholder="Mitropoleos 12, Athens" id="location" name="location" required autocomplete="location" />
          </div>
        </div>

        <div>
            <x-forms.label for="contact_information">Contact Information</x-forms.label>
            <div class="mt-2"> 
            <x-forms.input placeholder="Giorgos Papadopoulos, 6975920407" id="contact_information" name="contact_information" required autocomplete="contact_information" />
          </div>
        </div>

      <div>
            <x-forms.label for="last_name">Fire Extinguisher: 6kg</x-forms.label>
            <div class="mt-2">
            <x-forms.input placeholder="4" id="fe6" name="fe6" required autocomplete="fe6" />
          </div>
        </div>

      <div>
        <x-forms.label for="email">Fire Extinguisher: 12kg</x-forms.label>
        <div class="mt-2">
          <x-forms.input placeholder="2" id="fe12" name="fe12" required autocomplete="fe12" />
        </div>
      </div>

      <div class="col-span-full">
            <label for="comments" class="block text-sm/6 font-medium text-gray-900">Comments</label>
            <div class="mt-2">
            <textarea id="comments" name="comments" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
    </div>


      <div>
        <x-button>Save Job</x-button>
      </div>

  </x-forms.form>

</div>



</x-layout>