<x-layout :user="request()->user()" heading="Επεξεργασία Εργασίας" title="Επεξεργασία Εργασίας - Firesafe">
    

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Επεξεργασία Εργασίας</h2>
    </div>

    <div class="flex justify-center gap-3 mt-5">

        @if ($job->done)
            <a href="/jobs/{{ $job->id }}/undone" class="inline-flex items-center justify-center rounded bg-red-600 px-4 py-2 text-sm font-bold text-white hover:bg-red-700">
                Αναίρεση Ολοκλήρωσης Εργασίας
            </a>
        @else
            <a href="/jobs/{{ $job->id }}/done" class="inline-flex items-center justify-center rounded bg-green-600 px-4 py-2 text-sm font-bold text-white hover:bg-green-700">
                Ολοκλήρωση Εργασίας
            </a>
        @endif
        
        <a href="/jobs" class="inline-flex items-center justify-center rounded bg-gray-200 px-4 py-2 text-sm font-bold text-gray-800 hover:bg-gray-300">
            Ακύρωση
        </a>
    
    </div>

  <x-forms.form action="/jobs/{{ $job->id }}" method="POST" class="space-y-6">
        @method('PATCH')

        @if ($job->done)
            <div class="bg-green-600 text-white text-center font-bold px-4 py-2">
                Η Εργασία έχει ολοκληρωθεί!
            </div>
        @endif
        
        <div>
            <x-forms.label for="location">Τοποθεσία</x-forms.label>
            <div class="mt-2"> 
            <x-forms.input value="" id="location" name="location" required autocomplete="location" value="{{ old('location', $job->location) }}" />
          </div>
        </div>

        <div>
          <x-forms.label for="period">Μήνας</x-forms.label>
          <div class="mt-2">
              <select required id="period" name="period" class="w-full rounded-lg border border-gray-300 px-4 py-2 text-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500">
                  <option value="">Επιλογή Μήνα</option>
                  <option value="1" {{ old('period', $job->period) == '1' ? 'selected' : '' }}>
                    ΙΑΝΟΥΑΡΙΟΣ
                  </option>
                  <option value="2" {{ old('period', $job->period) == '2' ? 'selected' : '' }}>
                    ΦΕΒΡΟΥΑΡΙΟΣ
                  </option>
                  <option value="3" {{ old('period', $job->period) == '3' ? 'selected' : '' }}>
                    ΜΑΡΤΙΟΣ
                  </option>
                  <option value="4" {{ old('period', $job->period) == '4' ? 'selected' : '' }}>
                    ΑΠΡΙΛΙΟΣ
                  </option>
                  <option value="5" {{ old('period', $job->period) == '5' ? 'selected' : '' }}>
                    ΜΑΙΟΣ
                  </option>
                  <option value="6" {{ old('period', $job->period) == '6' ? 'selected' : '' }}>
                    ΙΟΥΝΙΟΣ
                  </option>
                  <option value="7" {{ old('period', $job->period) == '7' ? 'selected' : '' }}>
                    ΙΟΥΛΙΟΣ
                  </option>
                  <option value="8" {{ old('period', $job->period) == '8' ? 'selected' : '' }}>
                    ΑΥΓΟΥΣΤΟΣ
                  </option>
                  <option value="9" {{ old('period', $job->period) == '9' ? 'selected' : '' }}>
                    ΣΕΠΤΕΜΒΡΙΟΣ
                  </option>
                  <option value="10" {{ old('period', $job->period) == '10' ? 'selected' : '' }}>
                    ΟΚΤΩΒΡΙΟΣ
                  </option>
                  <option value="11" {{ old('period', $job->period) == '11' ? 'selected' : '' }}>
                    ΝΟΕΜΒΡΙΟΣ
                  </option>
                  <option value="12" {{ old('period', $job->period) == '12' ? 'selected' : '' }}>
                    ΔΕΚΕΜΒΡΙΟΣ
                  </option>
              </select>
          </div>
        </div>

        <div>
          <x-forms.label for="company_id">Εταιρεία</x-forms.label>
          <div class="mt-2">
              <select id="company_id" required name="company_id" class="w-full rounded-lg border border-gray-300 px-4 py-2 text-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500">
                  <option value="">Επιλογή Εταιρείας</option>
                  @foreach ($companies as $comp)
                    <option value="{{ $comp->id }}" @selected(old('company_id', $job->company_id) == $comp->id)>
                        {{ $comp->name }}
                    </option>
                  @endforeach
              </select>
          </div>
        </div>

        <div>
            <x-forms.label for="contact_information">Επικοινωνία</x-forms.label>
            <div class="mt-2"> 
            <x-forms.input value="{{ old('contact_information', $job->contact_information) }}" id="contact_information" name="contact_information" required autocomplete="contact_information" />
          </div>
        </div>

      <div>
            <x-forms.label for="last_name">Πυροσβεστήρας: 6kg</x-forms.label>
            <div class="mt-2">
            <x-forms.input value="{{ old('fe6', $job->fe6) }}" id="fe6" name="fe6" required autocomplete="fe6" />
          </div>
        </div>

      <div>
        <x-forms.label for="email">Πυροσβεστήρας: 12kg</x-forms.label>
        <div class="mt-2">
          <x-forms.input value="{{ old('fe12', $job->fe12) }}" id="fe12" name="fe12" required autocomplete="fe12" />
        </div>
      </div>

      <div class="col-span-full">
            <label for="comments" class="block text-sm/6 font-medium text-gray-900">Σχόλια</label>
            <div class="mt-2">
            <textarea id="comments" name="comments" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('comments', $job->comments) }}</textarea>
            </div>
    </div>


      <div>
        <x-button>Αποθήκευση Εργασίας</x-button>
      </div>

  </x-forms.form>
  
  

</div>



</x-layout>