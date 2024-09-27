<template>
    <div class="md:container md:mx-auto">
        <div class="flex flex-row bg-blue-50">

            <div class="basis-1/3">
                <img :src="aboutImage" alt="About Svg ">
            </div>

            <div class="basis-1/2 ml-20">
                <div class="flex items-center mt-20">
                    <h1 class="text-4xl font-extrabold text-gray-900 welcome-title">About</h1>
                </div>
                <p class="text-gray-700 text-lg  welcome-text mt-10">
                    Ich bin ein Informatikstudent im siebten Semester und interessiere mich für Informations- und
                    Kommunikationstechnologien. Mein berufliches Ziel ist es, Softwareingenieur zu werden. Ich habe
                    hauptsächlich mit Java (Microprofile, Spring Framework), C++, und PHP (Laravel) für die
                    Backend-Entwicklung sowie mit JavaScript (Angular) und Flutter für die Frontend-Entwicklung
                    gearbeitet. Ich bin immer bereit, neue Programmiersprachen und Technologien zu erlernen.
                    Ich liebe es, neue Dinge zu erschaffen und mit anderen zusammenzuarbeiten, daher
                    suche ich ständig nach Möglichkeiten, meine Fähigkeiten zu erweitern. Neben der Programmierung
                    interessiere ich mich auch für Fotografie und Lesen.
                </p>

            </div>
        </div>
    </div>
</template>

<style scoped></style>


<script>
export default {
  data() {
    return {
      aboutImage: "public/images/About-me-rafiki.svg"
    };
  }
};
</script>
