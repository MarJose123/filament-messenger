<?php

namespace MarJose123\FilamentMessenger\Livewire;

use Chatify\ChatifyMessenger;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class DatabaseMessagesListView extends Component
{
    use WithPagination;

    public static bool $isPaginated = true;

    public static ?string $trigger = null;

    public static ?string $pollingInterval = '30s';

    public static ?string $authGuard = null;

    public function getNotifications(): \Illuminate\Contracts\Pagination\Paginator | array | Collection | LengthAwarePaginator
    {
        if (! $this->isPaginated()) {
            return $this->getMessageQuery()->get();
        }

        return $this->getMessageQuery()->simplePaginate(50);
    }

    public function getUnreadNotificationsQuery(): Builder | Relation
    {
        // TODO
    }

    public function getMessageQuery(): Builder | Relation
    {
        // TODO
    }

    public function isPaginated(): bool
    {
        return static::$isPaginated;
    }

    public function render()
    {
        return view('filament-messenger::livewire.database-messages-list-view');
    }
}
