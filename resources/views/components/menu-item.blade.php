<div {{ $attributes->merge(['class' => 'flex flex-row items-center content-center cursor-pointer bg-gray-700 border border-black text-white p-2 hover:text-yellow-300 hover:bg-gray-800 active:text-yellow-400']) }}>
    {{ $slot }}
</div>
