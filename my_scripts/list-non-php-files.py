#!/usr/bin/env python

import os

def list_files_excluding_current_dir_and_php(start_dir):
    current_dir = os.path.dirname(os.path.abspath(__file__))
    files_list = []

    for root, dirs, files in os.walk(start_dir):
        # Skip the directory where the script is located
        if os.path.abspath(root) == current_dir:
            continue

        # Exclude hidden directories
        dirs[:] = [d for d in dirs if not d.startswith('.')]

        for file in files:
            # Exclude hidden files and files with .php extension
            if not file.startswith('.') and not file.endswith('.php'):
                files_list.append(os.path.join(root, file))

    return files_list

if __name__ == "__main__":
    start_directory = os.path.abspath(os.path.join(os.path.dirname(__file__), '..'))
    files = list_files_excluding_current_dir_and_php(start_directory)
    for file in files:
        print(file)

