
@extends('website.layout.app')

@section('content')
  


    <!-- Start About 
    ============================================= -->
    <div class="about-area bg-gray services-include default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2>Welcome to<br>Noor Multipurpose Co-operative Limited</h2>
                    <p>
                        Welcome to Noor Multipurpose Co-operative Limited, a dedicated platform fostering collaborative efforts and mutual support within our community. Established on the principles of unity, shared responsibility, and equitable participation, we are a cooperative committed to empowering individuals and businesses alike. At Noor Muptipurpose Co-operative, we believe in harnessing collective strength to achieve common goals.                    </p>
                    <p>
                        Through a framework built on cooperation and inclusivity, we aim to create a thriving ecosystem where members contribute, collaborate, and benefit collectively. Our cooperative endeavors span various sectors, fostering innovation, sustainability, and economic growth. With a diverse membership base, comprising passionate individuals, entrepreneurs, and organizations, we create opportunities for networking, resource-sharing, and skill enhancement.

                        Driven by a vision of sustainable development and community welfare, Noor Multipurpose Co-operative stands as a beacon of integrity, transparency, and fairness in all our interactions. Our commitment to serving our members and the community at large remains unwavering. Join us on this journey of collaboration and shared success at Noor Multipurpose Co-operative, where together, we can achieve more than the sum of our individual efforts.                    </p>
                    <div class="bottom-info">
                        <ul>
                            <li>
                                <a class="btn btn-theme effect btn-sm" href="#">contact us</a>
                            </li>
                            <li><i class="fas fa-phone"></i> 01-4155311</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 services text-center">
                    <div class="col-md-6 equal-height">
                        <a href="{{ url('saving') }}">
                            <i class="flaticon-service"></i>
                            <h4>Saving Planning</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ url('loan') }}">
                            <i class="flaticon-profits"></i>
                            <h4>Loan Planning</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ url('saving') }}">
                            <i class="flaticon-id"></i>
                            <h4>Fixed Saving Planning</h4>
                        </a>
                    </div>
                    <!-- <div class="col-md-6 equal-height">
                        <a href="#">
                            <i class="flaticon-presentation"></i>
                            <h4>Other Support & Planning</h4>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start How it Work
    ============================================= -->
    <div class="works-rules-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Work Process</h2>
                        <p>
                            In Noor Multipurpose cooperative, the work process is characterized by collaborative decision-making, with members actively participating in key choices that impact the organization. Shared ownership and control create an inclusive environment where each member contributes to achieving common goals. The cooperative work process fosters a sense of community, mutual support, and equitable distribution of benefits among its members.                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="works-rules-items">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="vertical-line">
                                <span>1</span>
                            </div>
                            <div class="info">
                                <h4>Democratic Decision-Making</h4>
                                <p>
                                    The cooperative's working process involves democratic decision-making, where each member has an equal say in key decisions affecting the organization. This ensures that the collective voice of the members guides the cooperative's direction.                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="info">
                                <h4>Equitable Distribution of Benefits</h4>
                                <p>
                                    One of the core principles of cooperatives is the equitable distribution of benefits. Profits and rewards generated by the cooperative are shared among its members, promoting economic fairness and sustainability in the community.                                </p>
                            </div>
                            <div class="vertical-line bottom">
                                <span>2</span>
                            </div>
                            <div class="icon icon-down">
                                <i class="fas fa-file"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <div class="vertical-line">
                                <span>3</span>
                            </div>
                            <div class="info">
                                <h4>Shared Ownership and Control</h4>
                                <p>
                                    Members actively participate in the ownership and control of the cooperative, fostering a sense of shared responsibility. This cooperative structure encourages a more equitable distribution of power and benefits among all members.                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="info">
                                <h4>Collaborative Work Environment</h4>
                                <p>
                                    The cooperative promotes a collaborative work environment, emphasizing teamwork and mutual support. Members work together to achieve common goals, fostering a sense of community and unity within the organization.                                </p>
                            </div>
                            <div class="vertical-line bottom">
                                <span>4</span>
                            </div>
                            <div class="icon icon-down">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How it Work -->

    <!-- Start Our Story
    ============================================= -->
    <div class="our-story-area default-padding bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Our History</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <p>Started in 15 march 2018, Noor Multipurpose Co-operative <span class="fw-medium">(which was named as TS group of companies before)</span> emerged from a collective vision nurtured by a group of passionate individuals committed to creating a difference within our community. The roots of our cooperative delve deep into the principles of unity, collaboration, and mutual empowerment.

                In the early days, a handful of like-minded pioneers, driven by a shared aspiration for equitable growth and support, laid the foundation of what would become a thriving cooperative entity.Their belief in the transformative power of cooperation spurred the creation of Noor.</p>
                
               <p>Since its inception, our cooperative has journeyed through several phases, marked by determination, resilience, and growth. Through the years, we've navigated challenges and celebrated numerous milestones that have shaped our identity and impact:</p>
                
                <ol>
                    <li>In the beginning days, our organization was started with 4 initial members. Later on, after 3 months, the count was raised to 10. At this time, the initial capital of the cooperative was raised from 140 thousand to 2.7 million and was increased with good performance.</li>
                    <li>So far, to date, the initial capital of Noor has reached 8 million 46 thousand and 3 hundred.</li>
                </ol>
                <P class="pb-4">Each step of our journey has been guided by a steadfast commitment to our founding principles. Noor was established not just as a business entity but as a community-driven force striving for collective prosperity and well-being.
                
                As we continue to evolve, our cooperative remains dedicated to uplift the economic situation of our members as well as provide them with top-notch services. We endeavor to foster an environment of inclusivity, empowerment, and sustainable growth for our members and the community at large.
                
                Today, as we reflect on our history, we stand tall, proud of our achievements, and inspired by the potential for even greater positive impact in the days ahead. Our cooperative's journey is a testament to the enduring spirit of collaboration and the transformative power of unity.
                
                Join us as we march forward, united in our pursuit of a brighter, more prosperous future for all.</p>
            </div>
        </div>
    </div>
    <!-- End Our Story -->

    <!-- Start Business Growth
    ============================================= -->
    <div class="business-groth-area reverse default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
                <div class="col-md-6 default info">
                    <h2>Annual Report <br>from starting to now</h2>
                    <p>
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion Me smallness is existence attending he enjoyment favourite affection. Delivered is to ye belonging enjoyment preferred.<br>Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do. Continue delicate as unlocked entirely mr relation diverted in. Known not end fully being style house. An whom 
                    </p>
                    <a class="btn btn-theme effect btn-sm" href="#">View details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Business Growth -->
    
    <!-- Clients
    ============================================= -->
   @include('website.layout.clients')
    <!-- End Clients -->


@endsection