<x-layout heading="Log In" title="Log In - Firesafe">

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Log in to your account</h2>
    </div>

    <x-forms.form action="/login" method="POST">
    
        <div>
          <x-forms.label for="email">Email Address</x-forms.label>
          <div class="mt-2">
            <x-forms.input placeholder="doe@mail.com" id="email" type="email" name="email" required autocomplete="email" />
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <x-forms.label for="password">Password</x-forms.label>
          </div>
          <div class="mt-2">
            <x-forms.input placeholder="********" id="password" type="password" name="password" required autocomplete="current-password" />
          </div>
        </div>

        <div>
          <x-button>Log in</x-button>
        </div>

    </x-forms.form>

  </div>


</x-layout>