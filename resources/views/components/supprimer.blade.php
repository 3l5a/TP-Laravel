

@if(isset($action))
<form action="{{$action}}" method="POST" class="inline-flex items-center ">
    @method('DELETE') @csrf
    <input type="submit" value="{{__('Supprimer')}}" class="px-4 py-2 bg-white dark:bg-red-600 border border-red-800 dark:border-red-800 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
</form>
@endif