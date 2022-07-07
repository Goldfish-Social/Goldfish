@extends('layouts.anon')

@section('content')
            <div class="mcontainer">
 
                <div class="bg-white max-w-4xl mx-auto md:p-10 p-6 relative rounded-md shadow">
                    
                    <div class="md:space-y-6 space-y-4 text-gray-400 md:text-lg">
                         
                        <div class="md:leading-8 leading-7"> Updated July 08, 2022</div>
                        <div class="font-semibold md:text-2xl text-xl text-gray-700"> Code of Conduct </div>
                        <div class="md:leading-8 leading-7"> Version 1.0</div>
                        <p>
                            The following guidelines are not a legal document, and final interpretation
                            is up to the administration of {{ config('app.url', 'https://goldfish.social') }}; they are here to provide you
                            with an insight into our content moderation policies:
                        </p>
                        <ol>
                            <li>
                                The following types of content will be removed from the public
                                timeline:
                                <ol type="a">
                                    <li>
                                        Excessive advertising
                                    </li>
                                    <li>
                                        Uncurated news bots posting from third-party news sources
                                    </li>
                                    <li>
                                        Untagged nudity, pornography and sexually explicit content,
                                        including artistic depictions
                                    </li>
                                    <li>
                                        Untagged gore and extremely graphic violence, including
                                        artistic depictions
                                    </li>
                                    <li>
                                        Fake news, anti-vaccination spam
                                    </li>
                                </ol>
                            </li>
                            <li>
                                The following types of content will be removed from the public
                                timeline, and may result in account suspension and revocation of access
                                to the service:
                                <ol type="a">
                                    <li>
                                        Racism or advocation of racism
                                    </li>
                                    <li>
                                        Sexism or advocation of sexism
                                    </li>
                                    <li>
                                        Casteism or advocation of casteism
                                    </li>
                                    <li>
                                        Discrimination against gender and sexual minorities, or
                                        advocation thereof
                                    </li>
                                    <li>
                                        Xenophobic and/or violent nationalism
                                    </li>
                                </ol>
                            </li>
                            <li>
                                The following types of content are explicitly disallowed and will
                                result in revocation of access to the service:
                                <ol type="a">
                                    <li>
                                        Sexual depictions of children
                                    </li>
                                    <li>
                                        Content illegal in Germany and/or France, such as holocaust
                                        denial or Nazi symbolism
                                    </li>
                                    <li>
                                        Conduct promoting the ideology of National Socialism
                                    </li>
                                </ol>
                            </li>
                            <li>
                                Any conduct intended to stalk or harass other users, or to impede other
                                users from utilizing the service, or to degrade the performance of the
                                service, or to harass other users, or to incite other users to perform
                                any of the aforementioned actions, is also disallowed, and subject to
                                punishment up to and including revocation of access to the service.
                                This includes, but is not limited to, the following behaviors:
                                <ol type="a">
                                    <li>
                                        Continuing to engage in conversation with a user that has
                                        specifically has requested for said engagement with that user
                                        to cease and desist may be considered harassment, regardless of
                                        platform-specific privacy tools employed.
                                    </li>
                                    <li>
                                        Aggregating, posting, and/or disseminating a person's
                                        demographic, personal, or private data without express
                                        permission (informally called doxing or dropping dox) may be
                                        considered harassment.
                                    </li>
                                    <li>
                                        Inciting users to engage another user in continued interaction
                                        or discussion after a user has requested for said engagement
                                        with that user to cease and desist (informally called brigading
                                        or dogpiling) may be considered harassment.
                                    </li>
                                </ol>
                            </li>
                        </ol>
                        <p>
                            These provisions notwithstanding, the administration of the service
                            reserves the right to revoke any user's access permissions, at any time,
                            for any reason, except as limited by law.
                        </p>
                        
                    </div>
     
                </div>
                     
            </div>
@endsection