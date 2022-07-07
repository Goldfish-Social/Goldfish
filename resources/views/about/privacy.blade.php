@extends('layouts.anon')

@section('content')
<div class="mcontainer">
 
    <div class="bg-white max-w-4xl mx-auto md:p-10 p-6 relative rounded-md shadow">
        
        <div class="md:space-y-6 space-y-4 text-gray-400 md:text-lg">
             
            <div class="md:leading-8 leading-7"> Updated July 08, 2022</div>
            <div class="font-semibold md:text-2xl text-xl text-gray-700"> Privacy Policy </div>
            <div class="md:leading-8 leading-7"> Version 1.0</div>

            <h3 id="collect">
                What information do we collect?
            </h3>
            <ul>
                <li>
                    <em>Basic account information</em>
                    : If you register on this server, you may be asked to enter a username,
                    an e-mail address and a password. You may also enter additional profile
                    information such as a display name and biography, and upload a profile
                    picture and header image. The username, display name, biography,
                    profile picture and header image are always listed publicly.
                </li>
                <li>
                    <em>Posts, following and other public information</em>
                    : The list of people you follow is listed publicly, the same is true
                    for your followers. When you submit a message, the date and time is
                    stored as well as the application you submitted the message from.
                    Messages may contain media attachments, such as pictures and videos.
                    Public and unlisted posts are available publicly. When you feature a
                    post on your profile, that is also publicly available information. Your
                    posts are delivered to your followers, in some cases it means they are
                    delivered to different servers and copies are stored there. When you
                    delete posts, this is likewise delivered to your followers. The action
                    of reblogging or favouriting another post is always public.
                </li>
                <li>
                    <em>Direct and followers-only posts</em>
                    : All posts are stored and processed on the server. Followers-only
                    posts are delivered to your followers and users who are mentioned in
                    them, and direct posts are delivered only to users mentioned in them.
                    In some cases it means they are delivered to different servers and
                    copies are stored there. We make a good faith effort to limit the
                    access to those posts only to authorized persons, but other servers may
                    fail to do so. Therefore it's important to review servers your
                    followers belong to. You may toggle an option to approve and reject new
                    followers manually in the settings.
                    <em>
                        Please keep in mind that the operators of the server and any
                        receiving server may view such messages
                    </em>
            , and that recipients may screenshot, copy or otherwise re-share them.        <em>Do not share any dangerous information over Mastodon.</em>
                </li>
                <li>
                    <em>IPs and other metadata</em>
                    : When you log in, we record the IP address you log in from, as well as
                    the name of your browser application. All the logged in sessions are
                    available for your review and revocation in the settings. The latest IP
                    address used is stored for up to 12 months. We also may retain server
                    logs which include the IP address of every request to our server.
                </li>
            </ul>
            <hr/>
            <h3 id="use">
                What do we use your information for?
            </h3>
            <p>
                Any of the information we collect from you may be used in the following
                ways:
            </p>
            <ul>
                <li>
                    To provide the core functionality of Mastodon. You can only interact
                    with other people's content and post your own content when you are
                    logged in. For example, you may follow other people to view their
                    combined posts in your own personalized home timeline.
                </li>
                <li>
                    To aid moderation of the community, for example comparing your IP
                    address with other known ones to determine ban evasion or other
                    violations.
                </li>
                <li>
                    The email address you provide may be used to send you information,
                    notifications about other people interacting with your content or
                    sending you messages, and to respond to inquiries, and/or other
                    requests or questions.
                </li>
            </ul>
            <hr/>
            <h3 id="protect">
                How do we protect your information?
            </h3>
            <p>
                We implement a variety of security measures to maintain the safety of your
                personal information when you enter, submit, or access your personal
                information. Among other things, your browser session, as well as the
                traffic between your applications and the API, are secured with SSL, and
                your password is hashed using a strong one-way algorithm. You may enable
                two-factor authentication to further secure access to your account.
            </p>
            <hr/>
            <h3 id="data-retention">
                What is our data retention policy?
            </h3>
            <p>
                We will make a good faith effort to:
            </p>
            <ul>
                <li>
                    Retain server logs containing the IP address of all requests to this
                    server, in so far as such logs are kept, no more than 90 days.
                </li>
                <li>
                    Retain the IP addresses associated with registered users no more than
                    12 months.
                </li>
            </ul>
            <p>
                You can request and download an archive of your content, including your
                posts, media attachments, profile picture, and header image.
            </p>
            <p>
                You may irreversibly delete your account at any time.
            </p>
            <hr/>
            <h3 id="cookies">
                Do we use cookies?
            </h3>
            <p>
                Yes. Cookies are small files that a site or its service provider transfers
                to your computer's hard drive through your Web browser (if you allow).
                These cookies enable the site to recognize your browser and, if you have a
                registered account, associate it with your registered account.
            </p>
            <p>
                We use cookies to understand and save your preferences for future visits.
            </p>
            <hr/>
            <h3 id="disclose">
                Do we disclose any information to outside parties?
            </h3>
            <p>
                We do not sell, trade, or otherwise transfer to outside parties your
                personally identifiable information. This does not include trusted third
                parties who assist us in operating our site, conducting our business, or
                servicing you, so long as those parties agree to keep this information
                confidential. We may also release your information when we believe release
                is appropriate to comply with the law, enforce our site policies, or
                protect ours or others rights, property, or safety.
            </p>
            <p>
                Your public content may be downloaded by other servers in the network. Your
                public and followers-only posts are delivered to the servers where your
                followers reside, and direct messages are delivered to the servers of the
                recipients, in so far as those followers or recipients reside on a
                different server than this.
            </p>
            <p>
                When you authorize an application to use your account, depending on the
                scope of permissions you approve, it may access your public profile
                information, your following list, your followers, your lists, all your
                posts, and your favourites. Applications can never access your e-mail
                address or password.
            </p>
            <hr/>
            <h3 id="children">
                Site usage by children
            </h3>
            <p>
                If this server is in the EU or the EEA: Our site, products and services are
                all directed to people who are at least 16 years old. If you are under the
                age of 16, per the requirements of the GDPR (
                <a href="https://en.wikipedia.org/wiki/General_Data_Protection_Regulation">
                    General Data Protection Regulation
                </a>
                ) do not use this site.
            </p>
            <p>
                If this server is in the USA: Our site, products and services are all
                directed to people who are at least 13 years old. If you are under the age
                of 13, per the requirements of COPPA (
                <a
                    href="https://en.wikipedia.org/wiki/Children%27s_Online_Privacy_Protection_Act"
                >
                    Children's Online Privacy Protection Act
                </a>
                ) do not use this site.
            </p>
            <p>
                Law requirements can be different if this server is in another
                jurisdiction.
            </p>
            <hr/>
            <h3 id="changes">
                Changes to our Privacy Policy
            </h3>
            <p>
                If we decide to change our privacy policy, we will post those changes on
                this page.
            </p>
            <p>
                This document is CC-BY-SA. It was last updated March 7, 2018.
            </p>
            <p>
                Originally adapted from the
                <a href="https://github.com/discourse/discourse">
                    Discourse privacy policy
                </a>
                .
            </p>
            
        </div>

    </div>
         
</div>
@endsection