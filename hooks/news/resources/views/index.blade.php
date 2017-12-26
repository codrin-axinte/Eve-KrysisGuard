@extends('layouts.social')

@section('social-content')
    <form action="#" class="nk-social-sort">
        <label for="activity-filter-by">Show:</label>
        <select id="activity-filter-by" class="form-control">
            <option value="-1">— Everything —</option>
            <option value="activity_update">Updates</option>
            <option value="friendship_accepted,friendship_created">Friendships</option>
            <option value="created_group">New Groups</option>
            <option value="joined_group">Group Memberships</option>
            <option value="group_details_updated">Group Updates</option>
            <option value="new_blog_post">Posts</option>
            <option value="new_blog_comment">Comments</option>
        </select>
    </form>

    <!-- START: Activity -->
    <ul class="nk-social-activity"><!-- START: form -->
        <app-social-activiy image="{{ Eve::avatar($user->providerAccountId(), 128) }}" author="{{ $user->name }}">
            <form action="#">
                <textarea class="form-control" placeholder="What's new, {{ $user->name }}?" rows="4"></textarea>
                <div class="nk-gap"></div>
                <label for="sendEmail">Send Email</label>
                <input type="checkbox" id="sendEmail" name="sendEmail">
                <button class="nk-btn link-effect-4 pull-right">Post Update</button>
            </form>
        </app-social-activiy>
        <news-post title="New feauture"
                       image="{{ Eve::avatar($user->providerAccountId(), 128) }}"
                       author="{{ $user->name }}"
                       posted-on="{{ \Carbon\Carbon::now()->subDays(3)->diffForHumans() }}">
                <div class="nk-social-activity-text">Wrong do point avoid by fruit learn or in death. So
                    passage however besides invited comfort elderly be me. Walls began of child civil am
                    heard hoped my. Satisfied pretended mr on do determine by. Old post took and ask
                    seen fact rich. Man entrance settling believed eat joy. Money as drift begin on to.
                    Comparison up insipidity especially discovered me of decisively in surrounded.
                    Points six way enough she its father. Folly sex downs tears ham green forty.
                </div>
        </news-post>
        <li class="nk-social-activity-load-more">
            <a href="#" class="nk-btn link-effect-4">Load More...</a>
        </li>
    </ul>
    <!-- END: Activity -->
@endsection

