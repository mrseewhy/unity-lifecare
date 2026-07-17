<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @livewire('partials.pagehead', ['title' => 'Daily Life Tasks Support'])
    <section class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Headline and Description -->
          {{-- <div class="text-center">
            <h2 data-aos="fade-up" data-aos-duration="800" class="text-4xl md:text-5xl font-bold text-purple-900 font-head">
              Daily Life Tasks Support
            </h2>
            <p data-aos="fade-up" data-aos-duration="900" class="mt-4 text-lg text-purple-800 max-w-2xl mx-auto">
              We assist with everyday tasks to help individuals live comfortably and independently.
            </p>
          </div> --}}
          <!-- Headline and Description -->
          <div class=" grid grid-cols-1 sm:grid-cols-2 mt-6 mb-0 sm:mb-20 gap-12 place-items-center">
            <div data-aos="flip-left" data-aos-duration="800">
              <img class="w-full sm:rounded-xl" alt="Unity Life Care team supporting individuals with disabilities" src="/images/daily.jpg">
            </div>
            <div class="order-first sm:order-last p-4">
              {{-- <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-4">
                  Here’s What We Offer
              </h2> --}}
              <p data-aos="fade-up" class="mb-4 text-purple-800">
                Daily Life Tasks Support at Unity Life Care is designed to help individuals manage their everyday responsibilities with ease and confidence. From meal preparation and household chores to personal care and shared living arrangements, our team provides practical assistance that enhances independence and improves quality of life. We believe that everyone deserves to live in a safe, comfortable, and organized environment. </p>
                  <p data-aos="fade-up" class="mb-4 text-purple-800">
                    Our services include help with everyday shared living, assistance with home responsibilities, and engagement in community activities. Whether you need a helping hand with daily tasks or support to maintain a balanced lifestyle, our dedicated caregivers are here to ensure you can focus on what matters most. At Unity Life Care, we’re committed to making everyday life simpler and more enjoyable. </p>
                  {{-- <p data-aos="fade-up" class="mb-4 text-purple-800"> Our compassionate team is committed to delivering high-quality care that respects dignity, encourages growth, and builds confidence.
              </p> --}}
            </div>
          </div>

          <!-- Cards -->
          <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Help with everyday shared living -->
            <div data-aos="fade-up" data-aos-duration="1000" class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <img class="w-full h-60 object-cover rounded-t-lg" src="/images/shared.jpg" alt="Help with everyday shared living">
              <div class="p-6">
                <h4 class="text-xl font-bold text-purple-900">Help with everyday shared living</h4>
                <p class="mt-4 text-purple-800">
                  We provide support for individuals living in shared environments to foster harmony and independence.
                </p>
                <a wire:navigate href="/shared-living" class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                  Read More →
                </a>
              </div>
            </div>

            <!-- Card 2: Assistance with home responsibilities -->
            <div data-aos="fade-up" data-aos-duration="1100" class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <img class="w-full h-60 object-cover rounded-t-lg" src="/images/daily2.jpg" alt="Assistance with home responsibilities">
              <div class="p-6">
                <h4 class="text-xl font-bold text-purple-900">Assistance with home responsibilities</h4>
                <p class="mt-4 text-purple-800">
                  From cleaning to meal preparation, we help with all aspects of home management.
                </p>
                <a wire:navigate href="/home-tasks" class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                  Read More →
                </a>
              </div>
            </div>

            <!-- Card 3: Engaging in community activities -->
            <div data-aos="fade-up" data-aos-duration="1200" class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <img class="w-full h-60 object-cover rounded-t-lg" src="/images/community.jpg" alt="Engaging in community activities">
              <div class="p-6">
                <h4 class="text-xl font-bold text-purple-900">Engaging in community activities</h4>
                <p class="mt-4 text-purple-800">
                  We encourage and support participation in community events and social activities.
                </p>
                <a wire:navigate href="/community-activities" class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
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
