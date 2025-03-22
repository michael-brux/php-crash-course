#!/usr/bin/env python3

import os
from collections import defaultdict

def count_files_excluding_current_dir_and_hidden(start_dir):
    current_dir = os.path.dirname(os.path.abspath(__file__))
    file_count = 0
    file_extension_count = defaultdict(int)

    for root, dirs, files in os.walk(start_dir):
        # Skip the directory where the script is located
        if os.path.abspath(root) == current_dir:
            continue

        # Exclude hidden directories
        dirs[:] = [d for d in dirs if not d.startswith('.')]

        for file in files:
            # Exclude hidden files
            if not file.startswith('.'):
                file_count += 1
                file_extension = os.path.splitext(file)[1]
                file_extension_count[file_extension] += 1

    return file_count, file_extension_count

if __name__ == "__main__":
    start_directory = os.path.abspath(os.path.join(os.path.dirname(__file__), '..'))
    total_files, extension_counts = count_files_excluding_current_dir_and_hidden(start_directory)
    
    print(f"Total files: {total_files}")
    print("File count by extension:")
    for ext, count in extension_counts.items():
        print(f"{ext}: {count}")
