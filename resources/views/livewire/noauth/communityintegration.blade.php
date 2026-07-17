<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @livewire('partials.pagehead', ['title' => 'Community Integration'])
    <section class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Headline and Description -->
          {{-- <div class="text-center">
            <h2 data-aos="fade-up" data-aos-duration="800" class="text-4xl md:text-5xl font-bold text-purple-900 font-head">
              Community Integration
            </h2>
            <p data-aos="fade-up" data-aos-duration="900" class="mt-4 text-lg text-purple-800 max-w-2xl mx-auto">
              We help individuals connect with their communities and participate in social activities.
            </p>
          </div> --}}
          <!-- Headline and Description -->
          <div class=" grid grid-cols-1 sm:grid-cols-2 mt-6 mb-0 sm:mb-20 gap-12 place-items-center">
            <div data-aos="flip-left" data-aos-duration="800">
              <img  class="w-full sm:rounded-xl" alt="Unity Life Care team supporting individuals with disabilities" src="/images/community2.jpg">
            </div>
            <div class="order-first sm:order-last p-4">
              {{-- <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-4">
                  Here’s What We Offer
              </h2> --}}
              <p data-aos="fade-up" class="mb-4 text-purple-800">
                Community Integration is a cornerstone of our services at Unity Life Care. We believe that meaningful connections and active participation in the community are essential for a fulfilling life. Our programs are designed to help individuals build relationships, explore new opportunities, and engage in social activities that bring joy and purpose. From group outings to skill-building workshops, we create inclusive spaces where everyone feels valued and supported. </p>
                  <p data-aos="fade-up" class="mb-4 text-purple-800">
                    Our services include support with travel needs, engagement in community activities, and assistance with household tasks. We work tirelessly to break down barriers and create pathways for individuals to connect with their communities. At Unity Life Care, we’re passionate about helping you thrive in a vibrant, inclusive world. </p>
                  {{-- <p data-aos="fade-up" class="mb-4 text-purple-800"> Our compassionate team is committed to delivering high-quality care that respects dignity, encourages growth, and builds confidence.
              </p> --}}
            </div>
          </div>

          <!-- Cards -->
          <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Support with travel needs -->
            <div data-aos="fade-up" data-aos-duration="1000" class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <img class="w-full h-60 object-cover rounded-t-lg" src="/images/travel.jpg" alt="Support with travel needs">
              <div class="p-6">
                <h4 class="text-xl font-bold text-purple-900">Support with travel needs</h4>
                <p class="mt-4 text-purple-800">
                  We assist with transportation to ensure individuals can access community resources and events.
                </p>
                <a href="/travel-support" class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                  Read More →
                </a>
              </div>
            </div>

            <!-- Card 2: Engaging in community activities -->
            <div data-aos="fade-up" data-aos-duration="1100" class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <img class="w-full h-60 object-cover rounded-t-lg" src="/images/community3.jpg" alt="Engaging in community activities">
              <div class="p-6">
                <h4 class="text-xl font-bold text-purple-900">Engaging in community activities</h4>
                <p class="mt-4 text-purple-800">
                  We encourage participation in local events, workshops, and social gatherings.
                </p>
                <a href="/community-engagement" class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                  Read More →
                </a>
              </div>
            </div>

            <!-- Card 3: Household Tasks -->
            <div data-aos="fade-up" data-aos-duration="1200" class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <img class="w-full h-60 object-cover rounded-t-lg" src="/images/house.jpg" alt="Household Tasks">
              <div class="p-6">
                <h4 class="text-xl font-bold text-purple-900">Household Tasks</h4>
                <p class="mt-4 text-purple-800">
                  We provide assistance with household chores to maintain a clean and organized living space.
                </p>
                <a href="/household-tasks" class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                  Read More →
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section >
        <!-- CTA Section -->
<div class="mt-16 bg-purple-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2   class="text-4xl md:text-5xl font-bold text-white font-head">
        Ready to Get Started?
      </h2>
      <p  class="mt-4 text-lg text-purple-100 max-w-2xl mx-auto">
        Contact us today to learn more about our services and how we can support you or your loved ones.
      </p>
      <div  class="mt-8 flex gap-8 justify-center">
        <a wire:navigate href="/contact" class="inline-block w-56 bg-white text-purple-900 px-4 py-4 border-2 border-purple-100 rounded-lg font-head font-semibold hover:bg-purple-50 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl">
          Contact Us
        </a>
        <a wire:navigate href="/visitors-registration" class="inline-block w-56 bg-purple-900 text-purple-50 border-2 border-purple-100 px-4 py-4 rounded-lg font-head font-semibold hover:bg-purple-50 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl">
          Register a Participant
        </a>
      </div>
    </div>
  </div>
      </section>

</div>
