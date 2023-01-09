<footer class="mt-3 text-white-50 fixed">
    <div class="px-3 div-foot">
        <form method="POST" action="{{ route('tweets.store') }}">
            @csrf
            <textarea name="message" cols="30" rows="10" class="b-example-divider message"></textarea>
            <button type="submit">Créer</button>
        </form>
    </div>
</footer>