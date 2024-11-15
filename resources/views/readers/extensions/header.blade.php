<div x-data="{ activeTab: window.location.pathname }">
    <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
        <!-- Pestaña Lista de Lectores -->
        <li role="presentation" :class="{ 'active': activeTab === '{{ route('readers.index') }}' }">
            <a href="{{ route('readers.index') }}">Lista de Lectores</a>
        </li>

        <!-- Pestaña Nuevo Lector -->
        <li role="presentation" :class="{ 'active': activeTab === '{{ route('readers.create') }}' }">
            <a href="{{ route('readers.create') }}">Nuevo Lector</a>
        </li>
    </ul>
</div>
