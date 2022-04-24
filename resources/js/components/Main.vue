<template>
  <v-main>
    <v-container>
      <v-row>
        <v-col v-for="task in tasks" :key="task.id" cols="4">
          <v-card height="200">
                <v-card-title>{{ task.name }}</v-card-title>
                <v-row
                    align="center"
                    justify="space-between"
                    class="mx-0"
                >
                    <div class="grey--text mx-4">
                        {{task.udvalg}}
                    </div>

                    <div class="grey--text mx-4">
                        {{task.start}} - {{task.end}}
                    </div>
                </v-row>
                <v-card-text>{{ task.description }}</v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-main>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      tasks: [],
    };
  },
  methods: {
    async getTasks() {
      await axios.get("/api/tasks").then((response) => {
        this.tasks = response.data;
      });
    },
  },
  created() {
    this.getTasks();
  },
};
</script>
