// Get current theme
var colordive_theme = localStorage.getItem( 'theme' );
// Set defaults if theme is not defined.
if ( ! colordive_theme ) {
  localStorage.setItem( 'theme', 'light' );
  colordive_theme = 'light';
}
// Add theme to the body.
document.body.classList.add( colordive_theme );

// Handle onClick events
document.getElementById( 'theme-toggle' ).addEventListener( 'click', () => {
  // Cleanup classes from body.
  document.body.classList.remove( 'light' );
  document.body.classList.remove( 'dark' );
  // Change the theme.
  colordive_theme = ( colordive_theme === 'light' ) ? 'dark' : 'light';
  // Save the theme.
  localStorage.setItem( 'theme', colordive_theme );
  // Apply the theme.
  document.body.classList.add( colordive_theme );
});