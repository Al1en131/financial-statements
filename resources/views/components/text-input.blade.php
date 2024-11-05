@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#20374D] focus:ring-[#20374D] rounded-md shadow-sm']) }}>
