//Create by Conan, 2010 - 2012. E-mail:bsspirit@gmail.com
package org.conan.dm.user.service;

import java.util.List;
import java.util.Map;
import org.conan.base.service.PageInObject;
import org.conan.base.service.PageOutObject;
import org.conan.base.service.SpringService;

import org.conan.dm.user.model.UserDTO;

/**
 * This is User DAO interface
 * @author Conan Zhang
 * @date 2012-10-29
 */
public interface UserService extends SpringService {

    int insertUser(UserDTO dto);
    int updateUser(UserDTO dto);
    int saveUser(UserDTO dto);
    int saveUser(UserDTO dto, Map<String,Object> paramMap);
    int deleteUser(int id);
    int deleteUser(UserDTO dto);
    

    UserDTO getUserById(int id);
    UserDTO getUserOne(Map<String,Object> paramMap);
    List<UserDTO> getUsers(Map<String,Object> paramMap);
    PageOutObject<UserDTO> getUsersPaging(Map<String,Object> paramMap, PageInObject page);
    int getUsersCount(Map<String,Object> paramMap);
}
