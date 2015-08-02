from project_module import project_object, image_object, link_object, challenge_object

p = project_object('drwho', 'Dr Who: White people dance')
p.domain = 'http://www.aidansean.com/'
p.path = 'drwho'
p.preview_image    = image_object('%s/images/project.jpg'   %p.path, 150, 250)
p.preview_image_bw = image_object('%s/images/project_bw.jpg'%p.path, 150, 250)
p.folder_name = 'aidansean'
p.github_repo_name = 'drwho'
p.mathjax = False
p.tags = 'Frivolous'
p.technologies = 'CSS,HTML,JavaScript,YouTube'
p.links.append(link_object(p.domain, 'drwho/', 'Live page'))
p.introduction = 'I had had an idea for a very long time, which was to animate a song using the canvas and a YouTube video.  Someone sent a <tt>gif</tt> image of some Dr Who actors dancing badly, and I saw this as an opportunity to test out my idea in the simplest way possible.  So I put the <tt>gif</tt> together with the YouTube song and button to play/stop the music and animation.'
p.overview = '''The YouTube video is hidden from view, so this needed to use the YouTube Javascript API (which I already mastered for the <a href="http://aidansean.com/projects/?p=235">Marble Hornet</a> project) and there is a single button which controls the music and animation.  If anyone watches to the end of the song they probably need to get some help.'''

p.challenges.append(challenge_object('This is a very simple prototype.', 'This project fell far short of what I wanted it to be a prototype for.  It was just a joke to show some friends, but it showed that I could synchronise the YouTube player and DOM elements quite well, so the first stage is complete.  The next stage is to make some animation on the canvas.', 'Resolved'))
