<x-layout heading="Register" title="Register - Firesafe">
    

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register a new Account</h2>
    </div>

  <x-forms.form action="/register" method="POST" class="space-y-6">

        <div>
            <x-forms.label for="first_name">First Name</x-forms.label>
            <div class="mt-2"> 
            <x-forms.input placeholder="John" id="first_name" type="first_name" name="first_name" required autocomplete="first_name" />
          </div>
        </div>

      <div>
            <x-forms.label for="last_name">Last Name</x-forms.label>
            <div class="mt-2">
            <x-forms.input placeholder="Doe" id="last_name" type="last_name" name="last_name" required autocomplete="last_name" />
          </div>
        </div>

      <div>
        <x-forms.label for="email">Email Address</x-forms.label>
        <div class="mt-2">
          <x-forms.input placeholder="doe@mail.com" id="email" type="email" name="email" required autocomplete="email" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <x-forms.label for="password">Password</x-forms.label>
          <div class="text-sm">
          </div>
        </div>
        <div class="mt-2">
          <x-forms.input placeholder="********" id="password" type="password" name="password" required autocomplete="current-password" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <x-forms.label for="password_confirmation">Password Confirmation</x-forms.label>
          <div class="text-sm">
          </div>
        </div>
        <div class="mt-2">
          <x-forms.input placeholder="********" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="current-password" />
        </div>
      </div>

      <div>
        <x-button>Register</x-button>
      </div>

  </x-forms.form>

</div>



</x-layout>