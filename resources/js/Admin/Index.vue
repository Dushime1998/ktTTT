<template>
    <div>
      <input type="text" v-model="searchQuery" placeholder="Search...">
      <div class="card-list">
        <div v-for="(card, index) in filteredCards" :key="index" class="card">
          <!-- Your card content here -->
          <p>{{ card.title }}</p>
          <p>{{ card.description }}</p>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        searchQuery: '',
        cards: [
          { title: 'Card 1', description: 'Description of Card 1' },
          { title: 'Card 2', description: 'Description of Card 2' },
          { title: 'Card 3', description: 'Description of Card 3' },
          // Add more cards as needed
        ]
      };
    },
    computed: {
      filteredCards() {
        return this.cards.filter(card => {
          return card.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                 card.description.toLowerCase().includes(this.searchQuery.toLowerCase());
        });
      }
    }
  };
  </script>

  <style scoped>
  .card-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .card {
    width: 200px;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  </style>
