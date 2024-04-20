@extends('saas.frontend.layouts.app')

@section('content')


<script type="application/ld+json">
        {!! $faqSchema !!}
    </script>
<section class="homec-bg-cover pd-top-90 pd-btm-120 mg-btm-40 homec-faq-bg">
    
    
    <div class="container homec-container-medium">
        <div class="row homec-container-medium__row">
            <div class="homec-section__head mg-top-60 mg-btm-30">
                <!-- <div class="homec-section__shape">
                    <span class="homec-section__badge homec-section__badge--shape">FAQ</span>
                </div> -->
                <h1 class="homec-section__title">Frequently Asked Questions</h1>
            </div>

            <div class="col-lg-6 col-12">

                <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-0">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-0">What is Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-0" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Properties is the most complete platform for <a href="/construction-design">construction & design,</a> <a href="/maintenance">maintenance,</a> housing and <a href="/relocation">relocation.</a> And the best of all is that we handle flexible plans, transparent prices and personalized plans, satisfying your needs.</p>
                                <p>Prroperties software makes it easy to enter the real estate market and earn passive income without any trouble.</p>
                                <ul>
                                    <li>Rent properties either short-stays, mid-stays or for long-stays.</li>
                                    <li>Buy properties.</li>
                                    <li>Sell properties.</li>
                                    <li>Access our Prroperty Management solutions. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-1">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-1">Who is Prroperties for?</button>
                        </h2>
                        <div id="ac-collapse1-1" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Under this premise, we’ve developed a platform for every actor in the bubble: Landlords, Investors, Tenants, and <a href="/hosts">Hosts.</a> That´s why Prroperties aims to simplify and optimize the world of <a href="/construction-design">construction & design,</a> <a href="/maintenance">maintenance,</a> housing and <a href="/relocation">relocation.</a> </p>
                                <p>Prroperties´ technology allows you to manage check-in and check-out communication between Landlords and Tenants with supported AI message prompts to ensure optimal processes and make your life much simpler and your assets more profitable.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-2">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-2">How can I rent a property through Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-2" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>At Prroperties, renting a property is easy! Be it for short-term, mid-term or long-term rentals. Be it ready-to-move rooms, furnished o unfurnished deparment or be it anykind of houses for rent. </p>
                                <p>Simply browse through our extensive listings of properties available for rent on our website. You can select the type of property, the location and a budget. </p>
                                <p>Once you find a property that suits your needs, you just need to complete the form and select the duration of stay.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-3">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-3">Can I list my property for rent or sale with Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-3" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Absolutely! Prroperties offers property owners the opportunity to list their properties for rent or sale on our platform.</p>
                                <p>Whether you are looking to rent your vacation home, find a tenant for your apartment or sell your property, we offer an easy-to-use, hassle-free, fast and secure listing process.</p>
                                <p>Prroperties allows investors, landlords and tenants to experience the power of unified control in an accessible and friendly tool.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->


                    <!-- End Single Accordion -->
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-4">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-4"> How can I buy a property through Prroperties?</button>
                        </h2>
                        <div id="ac-collapse1-4" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>If you own a lot of properties or need help managing real estate, we can help. With our all-in-one platform you can easily manage your entire portfolio.</p>
                                <p>We have the skills and knowledge to meet your needs.If you want to buy a ready-to-go property, Prroperties can help you through the entire process. Browse through our diverse selection of properties available for sale and ready to move. We have a user-friendly platform to simplify your research process. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-5">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-5"> What services do your property management specialists offer?</button>
                        </h2>
                        <div id="ac-collapse1-5" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>At Prroperties, we take care of the daily oversight and administration of real estate properties. We are dedicated to ensuring that your property investment is well-maintained and profitable. Our real estate <a href="/management">property management</a> services encompass a wide range of tasks, including: </p>
                                <ul>
                                    <li>Maintenance</li>
                                    <li>Security </li>
                                    <li>Tenant Relations</li>
                                    <li>Financial Management, among others</li>
                                </ul>
                                <p>Whether you're a landlord with multiple properties or an investor seeking assistance with real estate <a href="/management">property management,</a> we have the resources and experience to meet your needs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-6">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-6"> How does the Prroperties software work?</button>
                        </h2>
                        <div id="ac-collapse1-6" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Our all-in-one property management software can help lease your properties, streamline your operations, automate your financials, and much more!</p>
                                <p>To enjoy the advantages that Prroperties offers you, you only need to register and complete your information. With our software you can:</p>
                                <ul>
                                    <li>Organize tasks</li>
                                    <li>Collect rent faster and increase cash flow</li>
                                    <li>Easily screen tenants</li>
                                    <li>Send renewal emails and more</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    
                        <div class="accordion-item homec-accordion__single mg-top-30">
                        <h2 class="accordion-header" id="homect-1-7">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-7">How can I get pricing information for Property Management services?</button>
                        </h2>
                        <div id="ac-collapse1-7" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body">
                                <p>Real Estate Property Management <a href="/pricing">pricing</a> is available upon request. This plan is tailored for large businesses and includes:</p>
                                <ul>
                                    <li>All-in-one technology</li>
                                    <li>CRM</li>
                                    <li>Owner & tenant portal</li>
                                    <li>24/7 virtual staff</li>
                                    <li>Property management on/off-site</li>
                                    <li>Property surveillance</li>
                                </ul>
                                <p>I have more questions</p>
                                <p>If you are interested in learning more about our services and our platform, you can <a href="/contact">contact</a> us and we’ll be happy to solve any doubts you may have and guide you through the process. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    <div class="accordion-item homec-accordion__single mg-top-30 d-none">
                        <h2 class="accordion-header" id="homect-1-8">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-8">What is the difference between commercial and residential construction?</button>
                        </h2>
                        <div id="ac-collapse1-8" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body"><p>While both residential and commercial construction are pivotal segments of the construction industry, they differ significantly in various aspects:</p>
                            <ul>
                                <li><strong>Purpose and Design:</strong> Residential construction focuses on buildings meant for living, such as single-family houses, townhouses, condominiums, and duplexes. In contrast, commercial construction deals with buildings used for business purposes, including hospitals, shopping complexes, office locations, and warehouses. The design requirements for each type are tailored to their specific uses.</li>
                                <li><strong>Cost and Maintenance:</strong> Generally, commercial construction is more costly than residential construction. This is due to factors like licensing, building codes, materials, and labour skills required. Commercial buildings often need more specialized skills and have higher overhead costs. The maintenance for commercial properties managed through commercial property management platforms, also tends to be more intensive and expensive compared to residential properties.</li>
                                <li><strong>Construction Time Frame:</strong> Commercial buildings are usually constructed more quickly than residential buildings due to the urgency of business needs and financial implications. Tools like construction management software can aid in speeding up the process and managing resources efficiently.</li>
                                <li><strong>Materials and Equipment:</strong> The materials used in commercial construction are typically more durable and higher grade, reflecting the building's intended use and footfall. In contrast, residential construction materials are chosen for comfort and aesthetics. The equipment used in commercial construction is more sophisticated and heavy-duty.</li>
                                <li><strong>Codes and Regulations:</strong> Commercial construction must adhere to stricter codes and regulations compared to residential construction. This includes safety regulations, structural requirements, and more, due to the higher risks and complexities involved.</li>
                                <li><strong>Design Flexibility:</strong> Residential construction offers more flexibility in design and personalization, catering to individual preferences. Changes in commercial construction can be more challenging and costly due to the complexity and scale of the projects.</li>
                            </ul>
                            <p>Both types of construction require effective management and coordination. Software solutions, like those provided in property management platforms, offer valuable tools for managing both residential and commercial construction projects efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                      <div class="accordion-item homec-accordion__single mg-top-30 d-none">
                        <h2 class="accordion-header" id="homect-1-9">
                            <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1-9">What is relocation assistance?</button>
                        </h2>
                        <div id="ac-collapse1-9" class="accordion-collapse collapse " data-bs-parent="#homec-accordion">
                            <div class="accordion-body homec-accordion__body"><p><a href="/relocation">Relocation assistance</a> refers to the range of services and support provided to individuals or families to help them move to a new location, typically for employment reasons. This assistance is often offered by relocation assistance companies or through relocation assistance services provided by employers. The key components of relocation assistance include:</p>
                            <ul>
                                <li>Packing and Unpacking Services: Assistance with organizing, packing, and unpacking personal belongings to make the moving process smoother and more efficient.</li>
                                <li>Transportation and Moving Costs: Covering the expenses related to moving belongings from the old residence to the new one, which can include hiring moving companies or renting vehicles.</li>
                                <li>Temporary Lodging: Providing accommodation for the relocating individual or family during the transition period when they are moving out of their old residence and settling into the new one.</li>
                                <li>Disposition of a Residence: Support in selling or leasing out the previous residence, which can involve real estate services.</li>
                                <li>Acquisition of a New Residence: Assistance in finding and securing a new home, which may include identifying suitable properties, negotiating leases or purchase terms, and handling related paperwork.</li>
                                <li>Mortgage Assistance: Financial guidance and support for managing mortgage-related issues in both the old and new locations.</li>
                                <li>Cultural and Language Training: For international relocations, providing training to help the individual or family adapt to the new cultural environment and, if necessary, language training.</li>
                                <li>Secure Space Storage: Offering solutions for temporary storage of belongings, either in the old location or the new one, during the transition.</li>
                            </ul>
                            <p>Relocation assistance services aim to alleviate the stress and logistical challenges associated with moving, ensuring a smooth transition for the individual or family to their new home and community.</p>

                            <p><strong>Question:</strong> How much relocation assistance should I ask for?</p>
                            <p><strong>Answer:</strong> Determining the amount of relocation assistance to request can vary based on several factors including your personal circumstances, the cost of living in the new area, and the nature of your relocation. When considering relocation assistance, it's important to account for all potential expenses and support you might need. Here are key aspects to consider:</p>
                            <ul>
                                <li>Packing and Unpacking Services: Estimate the cost of professional services for packing and unpacking your belongings.</li>
                                <li>Transportation and Moving Costs: Calculate the expenses involved in physically moving your items. This can include the cost of hiring movers, renting trucks, or shipping fees.</li>
                                <li>Temporary Lodging: Consider the costs of temporary accommodation if you can’t immediately move into your new residence. Research the average hotel or rental costs in the new location for the duration you'll need.</li>
                                <li>Disposition and Acquisition of Residence: If selling your current home and buying or leasing a new one, factor in real estate agent fees, closing costs, and any other associated expenses.</li>
                                <li>Mortgage Assistance: If applicable, consider the costs related to managing or transferring your mortgage.</li>
                                <li>Cultural and Language Training: For international relocations, consider the costs of any necessary cultural adaptation or language training courses.</li>
                                <li>Secure Space Storage: If you require storage for your belongings either before or after the move, include the rental cost of these storage services.</li>
                                <li>Additional Costs: Also consider any other personal expenses that might arise during the relocation process.</li>
                            </ul>
                            <p>To determine a reasonable amount to ask for, research the costs associated with each of these services in your specific situation and add them together. It’s also advisable to consult with relocation assistance services or companies for a more tailored estimate, as they have expertise in handling such matters.</p>
                            <p>Remember, relocation assistance can vary greatly depending on the employer and the specifics of the job offer, so it's important to be informed and prepared to negotiate based on your needs and the standard practices in your industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Accordion -->
                    
                    
                    

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mg-top-30 d-none-tab">
                <!-- Support Img -->
                <div class="homec-support-img">
                    <img src="{{ asset('frontend/assets/img/faq-support.webp') }}" alt="Customer support agent holding a model house on FAQ page">
                    <div class="homec-support-img__content">
                        <img src="{{ asset('frontend/assets/img/support-icon-white.svg') }}" alt="support_image">
                        <h4 class="homec-support-img__title">24/7 Support <span>Have any Questions Contact Us?</span>
                        </h4>
                    </div>
                </div>
                <!-- End Support Img -->
            </div>
        </div>
    </div>
</section>


@endsection
