<!-- resources/views/components　配下のコンポーネントファイルを使用する -->
<x-tests.app>
    <x-slot name="header">
        header - 1
    </x-slot>

    compoent-test1

    <x-tests.card title="タイトル" content="コンテンツ" :message="$message"/>
</x-tests.app>