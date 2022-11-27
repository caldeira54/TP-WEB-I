function mascaraDinheiro(value) {
    return 'R$ ' + value?.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
}
