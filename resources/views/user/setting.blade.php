
<x-title>Settings</x-title>


<x-app-layout>
    
      @livewire('settings', ['user' => auth()->user()], key($user->id))

</x-app-layout>


