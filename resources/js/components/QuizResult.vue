<template>
<section class="quiz">
    <h1>Result</h1>
    <p>Your score is {{ $route.params.totalScore }}</p>
    <div class="answers-wrapper">
        <router-link to="/quiz" class="button">One More</router-link>
        <router-link to="/" class="button">Home</router-link>
    </div>
</section>
</template>
