<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    @if ($isInline())
        <x-slot name="labelSuffix">
    @endif
    <x-filament-support::grid
        :default="$getColumns('default')"
        :sm="$getColumns('sm')"
        :md="$getColumns('md')"
        :lg="$getColumns('lg')"
        :xl="$getColumns('xl')"
        :two-xl="$getColumns('2xl')"
        :is-grid="! $isInline()"
        :attributes="$attributes->merge($getExtraAttributes())->class([
            'filament-forms-radio-component',
            'flex flex-wrap gap-3' => $isInline(),
            'gap-2' => ! $isInline(),
        ])"
    >
        @php
            $isDisabled = $isDisabled();
        @endphp

        @foreach ($getOptions() as $value => $label)
            <div @class([
                'gap-3' => ! $isInline(),
                'gap-2' => $isInline(),
            ])>
                <div class="flex items-center">
                    <label for="{{ $getId() }}-{{ $value }}" class="w-full cursor-pointer bg-white rounded-lg border grid grid-cols-5 hover:text-gray-600 hover:bg-gray-100">
                        <input
                            name="{{ $getId() }}"
                            id="{{ $getId() }}-{{ $value }}"
                            type="radio"
                            value="{{ $value }}"
                            dusk="filament.forms.{{ $getStatePath() }}"
                        {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                        {{ $getExtraInputAttributeBag()->class([
                            'hidden peer',
                        ]) }}
                        {!! ($isDisabled || $isOptionDisabled($value, $label)) ? 'disabled' : null !!}
                        />
                        <div  @class([
                            'font-medium flex justify-between items-center p-5 col-span-4 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-blue-100',
                            'text-gray-700' => ! $errors->has($getStatePath()),
                            'dark:text-gray-200 dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 dark:bg-gray-800 dark:hover:bg-gray-700' => (! $errors->has($getStatePath())) && config('forms.dark_mode'),
                            'text-danger-600' => $errors->has($getStatePath()),
                        ])>
                            <div class="block">
                                <div class="w-full text-lg font-semibold">
                                    {{ $label }}
                                </div>
                                <div class="w-full">
                                    {{ $getDescription($value) }}
                                </div>
                            </div>
                        </div>
                        <div class="hidden col-span-1 text-blue-600 peer-checked:bg-blue-100 peer-checked:flex">
                            <svg aria-hidden="true" class="w-8 h-8 justify-center self-center mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M14.0458 3.4856C14.3299 3.78703 14.3158 4.26169 14.0144 4.54579L6.08456 12.0197C5.74829 12.3366 5.22042 12.3269 4.89609 11.9977L2.21576 9.27737C1.92504 8.98231 1.92856 8.50745 2.22361 8.21674C2.51867 7.92602 2.99353 7.92954 3.28424 8.22459L5.51839 10.4921L12.9856 3.45421C13.287 3.17011 13.7617 3.18416 14.0458 3.4856Z"/></svg>
                        </div>
                    </label>
                </div>
            </div>
        @endforeach
    </x-filament-support::grid>
    @if ($isInline())
        </x-slot>
    @endif
</x-dynamic-component>
