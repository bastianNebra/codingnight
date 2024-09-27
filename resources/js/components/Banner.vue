<template>
    <div class="flex items-center justify-center">
        <img class="w-full h-82" :src="aboutImage" alt="">
    </div>
</template>

<script>
export default {
  data() {
    return {
      aboutImage: "resources/assets/bastian-banner.jpg"
    };
  }
};
</script>
