<div class="messenger-menu">
    <x-filament::dropdown placement="top-start" width="sm">
        <x-slot name="trigger">
            <x-filament::icon-button
                alias="filament-messenger::navigation.icon"
                icon="heroicon-o-chat-bubble-left-ellipsis"
                color="gray"
                icon-size="lg"
                :label="__('filament-messenger::navigation.icon')"
            />
        </x-slot>
        <x-filament::dropdown.list>
            @foreach([1,2] as $value)
                <x-filament::dropdown.list.item>
                    <a href="#" class="flex px-4 py-3">
                        <img class="rounded-full w-8 h-8 flex-shrink-0" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400 text-ellipsis overflow-hidden">
                                <span class="font-semibold text-gray-900 dark:text-white">
                                    Jese Leos
                                </span>:
                                <p class="font-thin  italic">
                                "Hey, what's up? all set for the presentation?"
                                </p>
                            </div>
                            <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                        </div>
                    </a>
                </x-filament::dropdown.list.item>
            @endforeach
        </x-filament::dropdown.list>
    </x-filament::dropdown>
</div>
