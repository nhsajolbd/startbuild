#!/bin/bash

# Check if the theme name argument is provided
if [ -z "$1" ]; then
    echo "Please provide a new theme name as an argument."
    echo "Usage: ./rename_theme.sh new_theme_name"
    exit 1
fi

# Store the new theme name from the argument
new_theme_name=$1

# Define the original theme name to be replaced
original_name="startpress"

# Replace in all filenames containing 'startpress' and update filenames
find . -type f -name "*$original_name*" | while read -r file; do
    new_file=$(echo "$file" | sed "s/$original_name/$new_theme_name/g")
    mv "$file" "$new_file"
done

# Replace text inside all files
find . -type f -exec sed -i "s/$original_name/$new_theme_name/g" {} +

# Rename directories containing 'startpress'
find . -depth -type d -name "*$original_name*" | while read -r dir; do
    new_dir=$(echo "$dir" | sed "s/$original_name/$new_theme_name/g")
    mv "$dir" "$new_dir"
done

echo "Theme name updated successfully to '$new_theme_name'."
