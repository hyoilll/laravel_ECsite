<!-- resources/views/components　配下のコンポーネントファイルを使用する -->
<x-tests.app>
    <x-slot name="header">header2</x-slot>

    compoent-test2
    <x-test-class-base classBaseMessage="メッセージです"/>
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更しています。"/>
</x-tests.app>