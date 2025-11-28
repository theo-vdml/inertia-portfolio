<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps<{
    settings: {
        site_name: string;
        site_description: string;
    };
    profile: {
        name: string;
        avatar: string;
        bio: string;
        role: string;
        location: string;
        is_available: boolean;
    };
}>();

const links = ref([
    {
        id: 1,
        title: 'GitHub',
        url: 'https://github.com/yourusername',
        icon: 'github',
    },
    {
        id: 2,
        title: 'Twitter',
        url: 'https://twitter.com/yourusername',
        icon: 'twitter',
    },
    {
        id: 3,
        title: 'LinkedIn',
        url: 'https://linkedin.com/in/yourusername',
        icon: 'linkedin',
    },
    {
        id: 4,
        title: 'Email',
        url: 'mailto:your@email.com',
        icon: 'email',
    },
]);

const projects = ref([
    {
        id: 1,
        title: 'Project Alpha',
        description: 'A modern web application built with Vue.js and Laravel',
        tech: ['Vue', 'Laravel', 'Tailwind'],
        url: 'https://github.com/yourusername/project-alpha',
        year: '2025',
    },
    {
        id: 2,
        title: 'Design System',
        description: 'Minimalist component library for modern interfaces',
        tech: ['TypeScript', 'CSS', 'Storybook'],
        url: 'https://github.com/yourusername/design-system',
        year: '2024',
    },
    {
        id: 3,
        title: 'API Gateway',
        description: 'High-performance microservices architecture',
        tech: ['Node.js', 'Docker', 'Redis'],
        url: 'https://github.com/yourusername/api-gateway',
        year: '2024',
    },
]);

const getIcon = (icon: string) => {
    const icons: Record<string, string> = {
        github: 'M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z',
        twitter:
            'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z',
        linkedin:
            'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z',
        email: 'M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z',
    };
    return icons[icon] || icons.github;
};
</script>

<template>
    <Head>
        <title>{{ settings.site_name }}</title>
        <meta name="description" :content="settings.site_description" />
    </Head>

    <div
        class="dark min-h-screen bg-gradient-to-br from-black via-zinc-950 to-black font-mono text-white antialiased"
    >
        <!-- Grid Pattern -->
        <div
            class="fixed inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)] bg-[size:4rem_4rem]"
        />

        <!-- Main Content -->
        <main class="relative mx-auto max-w-2xl px-6 py-20">
            <!-- Profile Section - Enhanced -->
            <div class="animate-fade-in mb-24">
                <!-- Avatar - Centered & Larger -->
                <div class="mb-8 flex justify-center">
                    <div class="relative">
                        <div
                            class="size-32 overflow-hidden rounded-full border-2 border-white/20 bg-white/5 p-1 backdrop-blur-sm"
                        >
                            <div
                                class="size-full overflow-hidden rounded-full border border-white/10"
                            >
                                <img
                                    :src="profile.avatar"
                                    :alt="profile.name"
                                    class="size-full object-cover"
                                />
                            </div>
                        </div>
                        <!-- Status indicator -->
                        <div
                            class="absolute right-2 bottom-2 size-6 rounded-full border-4 border-black bg-green-500"
                        >
                            <div
                                class="absolute inset-0 animate-ping rounded-full bg-green-500 opacity-75"
                            />
                        </div>
                    </div>
                </div>

                <!-- Name & Role - Centered -->
                <div class="mb-8 text-center">
                    <h1 class="mb-3 text-4xl font-bold tracking-tight">
                        {{ profile.name }}
                    </h1>
                    <div
                        class="mb-4 inline-block rounded-full border border-white/20 bg-white/5 px-4 py-1.5 text-sm text-white/90 backdrop-blur-sm"
                    >
                        {{ profile.role }}
                    </div>
                </div>

                <!-- Bio - Centered with max width -->
                <div class="mx-auto mb-6 max-w-lg text-center">
                    <p class="leading-relaxed text-white/60">
                        {{ profile.bio }}
                    </p>
                </div>

                <!-- Meta Info - Centered -->
                <div
                    class="flex flex-wrap items-center justify-center gap-4 text-sm"
                >
                    <div class="flex items-center gap-2 text-white/50">
                        <svg
                            class="size-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>
                        <span>{{ profile.location }}</span>
                    </div>

                    <div class="size-1 rounded-full bg-white/20" />

                    <div class="flex items-center gap-2 text-green-400">
                        <div
                            class="size-2 animate-pulse rounded-full bg-green-400"
                        />
                        <span>{{
                            profile.is_available
                                ? 'Available for work'
                                : 'Not available'
                        }}</span>
                    </div>
                </div>

                <!-- Decorative divider -->
                <div
                    class="mx-auto mt-12 h-px w-24 bg-gradient-to-r from-transparent via-white/20 to-transparent"
                />
            </div>

            <!-- Links Section -->
            <section class="mb-16">
                <h2 class="mb-6 text-xs tracking-wider text-white/40 uppercase">
                    Connect
                </h2>
                <div class="grid gap-3">
                    <a
                        v-for="link in links"
                        :key="link.id"
                        :href="link.url"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group relative flex items-center gap-4 rounded-lg border border-white/10 bg-white/5 px-5 py-4 backdrop-blur-sm transition-all hover:border-white/20 hover:bg-white/10"
                    >
                        <!-- Icon -->
                        <div
                            class="flex size-10 shrink-0 items-center justify-center rounded-md bg-white/5"
                        >
                            <svg
                                class="size-5 fill-current text-white/70 transition-colors group-hover:text-white"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path :d="getIcon(link.icon)" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <span class="flex-1 font-medium tracking-tight">
                            {{ link.title }}
                        </span>

                        <!-- Arrow -->
                        <svg
                            class="size-4 shrink-0 text-white/40 transition-all group-hover:translate-x-1 group-hover:text-white"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>
                </div>
            </section>

            <!-- Projects Section -->
            <section>
                <h2 class="mb-6 text-xs tracking-wider text-white/40 uppercase">
                    Recent Work
                </h2>
                <div class="grid gap-4">
                    <a
                        v-for="project in projects"
                        :key="project.id"
                        :href="project.url"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group relative overflow-hidden rounded-lg border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition-all hover:border-white/20 hover:bg-white/10"
                    >
                        <!-- Year Badge -->
                        <div
                            class="mb-3 inline-block rounded-md bg-white/5 px-2 py-1 text-xs text-white/60"
                        >
                            {{ project.year }}
                        </div>

                        <!-- Title -->
                        <h3 class="mb-2 text-lg font-bold tracking-tight">
                            {{ project.title }}
                        </h3>

                        <!-- Description -->
                        <p class="mb-4 text-sm leading-relaxed text-white/60">
                            {{ project.description }}
                        </p>

                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2">
                            <span
                                v-for="tech in project.tech"
                                :key="tech"
                                class="rounded-md border border-white/10 bg-white/5 px-2 py-1 text-xs text-white/70"
                            >
                                {{ tech }}
                            </span>
                        </div>

                        <!-- Hover Effect -->
                        <div
                            class="absolute top-6 right-4 opacity-0 transition-all group-hover:opacity-100"
                        >
                            <svg
                                class="size-4 text-white/60"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                />
                            </svg>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Footer -->
            <footer class="mt-20 border-t border-white/10 pt-8 text-center">
                <p class="text-xs text-white/40">
                    © {{ new Date().getFullYear() }} {{ profile.name }}. All
                    rights reserved.
                </p>
            </footer>
        </main>
    </div>
</template>

<style scoped>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.6s ease-out;
}
</style>
