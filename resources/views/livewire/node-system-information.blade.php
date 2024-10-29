<div wire:poll.10s>
    @switch($node->systemInformation()['version'] ?? 'false')
        @case('false')
            <x-filament::icon
                x-tooltip="{
                    content: 'Error connecting to node! Check browser console for details.',
                    theme: $store.theme,
                }"
                :icon="'tabler-heart-off'"
                @class(['fi-ta-icon-item', $sizeClasses, 'fi-color-custom text-custom-500 dark:text-custom-400', 'fi-color-danger'])
                @style([\Filament\Support\get_color_css_variables('danger', shades: [400, 500], alias: 'tables::columns.icon-column.item') => true])
            />
            @break
        @default
            <x-filament::icon
                x-tooltip="{
                    content: '{{ $node->systemInformation()['version'] }}',
                    theme: $store.theme,
                }"
                :icon="'tabler-heartbeat'"
                @class(['fi-ta-icon-item', $sizeClasses, 'fi-color-custom text-custom-500 dark:text-custom-400', 'fi-color-success' => true])
                @style([\Filament\Support\get_color_css_variables('success', shades: [400, 500], alias: 'tables::columns.icon-column.item') => true])
            />
    @endswitch
</div>
