<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-primary to-blue-900 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">AI Content Crew</h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-100">Create Free, SEO-Friendly Blogs and Articles with novel AI imagery and publish to your favorite platform in minutes</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/signup" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Get Started Free
                    </a>
                    <a href="/demo" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-primary transition-colors duration-300">
                        Watch Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Powerful Features</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Everything you need to create and manage your content efficiently</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-magic text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">AI-Powered Content</h3>
                    <p class="text-gray-600">Generate high-quality, SEO-optimized content with our advanced AI technology</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-image text-2xl text-tenetlygreen"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">AI Image Generation</h3>
                    <p class="text-gray-600">Create unique, relevant images for your content with our AI image generator</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-rocket text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">One-Click Publishing</h3>
                    <p class="text-gray-600">Publish your content directly to your favorite platforms with a single click</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">How It Works</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Simple steps to create amazing content</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">1</div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Choose Topic</h3>
                    <p class="text-gray-600">Select your content topic or let AI suggest one</p>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">2</div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Generate Content</h3>
                    <p class="text-gray-600">AI creates SEO-optimized content for you</p>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">3</div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Add Images</h3>
                    <p class="text-gray-600">Generate or upload relevant images</p>
                </div>
                
                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">4</div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Publish</h3>
                    <p class="text-gray-600">Publish to your platform with one click</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of content creators who are already using AI Content Crew</p>
            <a href="/signup" class="inline-block bg-white text-primary px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Start Creating Now
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>