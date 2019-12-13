<template>
<section class="quiz">
    <h1>Result</h1>
    <br />
    <h2>Your score is {{ $route.params.totalScore }}</h2>
    <div class="answers-wrapper">
        <router-link to="/quiz" class="button">One More</router-link>
        <router-link to="/" class="button">Home</router-link>
    </div>
</section>
</template>
