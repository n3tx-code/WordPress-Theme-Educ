/**
 * Main JavaScript file
 * Contains all custom scripts for the theme
 */

(function() {
    'use strict';
    
    // Add a console log to check if the file is loaded
    console.log('JavaScript is loaded!');
    
    // Add a visible element to the page to confirm loading
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.querySelector('body');
        const notification = document.createElement('div');
        notification.style.position = 'fixed';
        notification.style.bottom = '20px';
        notification.style.right = '20px';
        notification.style.background = '#4CAF50';
        notification.style.color = 'white';
        notification.style.padding = '10px';
        notification.style.borderRadius = '5px';
        notification.textContent = 'JavaScript is loaded!';
        body.appendChild(notification);
        
        // Remove the notification after 3 seconds
        setTimeout(() => {
            notification.remove();
        }, 10000);
    });
})(); 